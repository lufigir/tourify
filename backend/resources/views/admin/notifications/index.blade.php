@extends('admin.layout')
@section('title', 'Notificaciones')

@section('content')
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold mb-0">Notificaciones recientes</h5>
        <a href="{{ route('admin.notifications.create') }}" class="btn btn-primary">
            <i class="bi bi-send me-1"></i>Enviar notificación
        </a>
    </div>
    <table class="table table-hover align-middle">
        <thead>
            <tr><th>#</th><th>Usuario</th><th>Título</th><th>Mensaje</th><th>Estado</th><th>Fecha</th></tr>
        </thead>
        <tbody>
            @forelse($notifications as $notification)
            <tr>
                <td>{{ $notification->id }}</td>
                <td class="fw-semibold">{{ $notification->user?->name ?? 'Usuario eliminado' }}</td>
                <td>{{ $notification->title }}</td>
                <td class="text-muted">{{ Str::limit($notification->message, 60) ?: '—' }}</td>
                <td>
                    @if($notification->is_read)
                        <span class="badge bg-success">Leída</span>
                    @else
                        <span class="badge bg-secondary">No leída</span>
                    @endif
                </td>
                <td class="text-muted small">{{ $notification->created_at->format('d/m/Y H:i') }}</td>
            </tr>
            @empty
            <tr><td colspan="6" class="text-center text-muted py-4">No hay notificaciones registradas.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
