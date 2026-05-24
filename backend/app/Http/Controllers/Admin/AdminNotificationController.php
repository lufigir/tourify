<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminNotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::with('user')
            ->latest()
            ->take(100)
            ->get();

        return view('admin.notifications.index', compact('notifications'));
    }

    public function create()
    {
        return view('admin.notifications.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'   => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $users = User::all();
        $now   = now();

        $rows = $users->map(fn ($user) => [
            'user_id'         => $user->id,
            'notifiable_id'   => null,
            'notifiable_type' => null,
            'title'           => $data['title'],
            'message'         => $data['message'],
            'is_read'         => false,
            'created_at'      => $now,
            'updated_at'      => $now,
        ])->all();

        Notification::insert($rows);

        $this->sendPush($users, $data['title'], $data['message']);

        return redirect()->route('admin.notifications.index')
            ->with('success', 'Notificación enviada a ' . $users->count() . ' usuario(s).');
    }

    private function sendPush($users, string $title, string $message): void
    {
        $tokens = $users->pluck('push_token')->filter()->values();

        if ($tokens->isEmpty()) {
            return;
        }

        $messages = $tokens->map(fn ($token) => [
            'to'    => $token,
            'title' => $title,
            'body'  => $message,
            'sound' => 'default',
        ])->all();

        try {
            Http::acceptJson()->post('https://exp.host/--/api/v2/push/send', $messages);
        } catch (\Throwable $e) {
            // El envío push es best-effort; la notificación ya quedó persistida.
        }
    }
}
