@extends('admin.layout')
@section('title', 'Usuarios')

@section('content')
<div class="card p-4">
    <h5 class="fw-bold mb-3">Lista de Usuarios</h5>
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th>#</th><th>Nombre</th><th>Email</th><th>Rol</th>
                <th class="text-center">Reseñas</th><th class="text-center">Inscripciones</th><th class="text-center">Favoritos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td class="fw-semibold">{{ $user->name }}</td>
                <td class="text-muted">{{ $user->email }}</td>
                <td>
                    @if($user->role_id === 1)
                        <span class="badge bg-primary">Administrador</span>
                    @else
                        <span class="badge bg-secondary">Usuario</span>
                    @endif
                </td>
                <td class="text-center">{{ $user->reviews_count }}</td>
                <td class="text-center">{{ $user->event_registrations_count }}</td>
                <td class="text-center">{{ $user->favorites_count }}</td>
                <td>
                    @if($user->id !== auth()->id())
                    <form method="POST" action="{{ route('admin.users.toggleRole', $user) }}" class="d-inline"
                          onsubmit="return confirm('¿Cambiar el rol de este usuario?')">
                        @csrf @method('PATCH')
                        <button type="submit" class="btn btn-sm btn-outline-primary me-1" title="Cambiar rol">
                            <i class="bi bi-arrow-repeat"></i>
                        </button>
                    </form>
                    <form method="POST" action="{{ route('admin.users.destroy', $user) }}" class="d-inline"
                          onsubmit="return confirm('¿Eliminar este usuario?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Eliminar">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                    @else
                        <span class="text-muted small">Tú</span>
                    @endif
                </td>
            </tr>
            @empty
            <tr><td colspan="8" class="text-center text-muted py-4">No hay usuarios registrados.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
