<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::with('role')
            ->withCount(['reviews', 'eventRegistrations', 'favorites'])
            ->orderBy('name')
            ->get();

        return view('admin.users.index', compact('users'));
    }

    public function toggleRole(User $user)
    {
        if ($user->id === auth()->id()) {
            return back()->withErrors('No puedes cambiar tu propio rol.');
        }

        if ($user->role_id === 1 && User::where('role_id', 1)->count() <= 1) {
            return back()->withErrors('Debe existir al menos un administrador.');
        }

        $user->update(['role_id' => $user->role_id === 1 ? 2 : 1]);

        return back()->with('success', 'Rol actualizado para ' . $user->name . '.');
    }

    public function destroy(User $user)
    {
        if ($user->id === auth()->id()) {
            return back()->withErrors('No puedes eliminar tu propia cuenta.');
        }

        if ($user->role_id === 1 && User::where('role_id', 1)->count() <= 1) {
            return back()->withErrors('No puedes eliminar al último administrador.');
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
