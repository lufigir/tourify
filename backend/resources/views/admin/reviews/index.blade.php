@extends('admin.layout')
@section('title', 'Reseñas')

@section('content')
<div class="card p-4">
    <h5 class="fw-bold mb-3">Moderación de Reseñas</h5>
    <table class="table table-hover align-middle">
        <thead>
            <tr><th>#</th><th>Usuario</th><th>Sobre</th><th>Calificación</th><th>Comentario</th><th>Fecha</th><th>Acciones</th></tr>
        </thead>
        <tbody>
            @forelse($reviews as $review)
            <tr>
                <td>{{ $review->id }}</td>
                <td class="fw-semibold">{{ $review->user?->name ?? 'Usuario eliminado' }}</td>
                <td>
                    <span class="badge bg-light text-dark text-capitalize">{{ $review->reviewable_type }}</span>
                    {{ $review->reviewable?->name ?? $review->reviewable?->title ?? '#' . $review->reviewable_id }}
                </td>
                <td class="text-warning text-nowrap">
                    @for($i = 1; $i <= 5; $i++)
                        <i class="bi bi-star{{ $i <= $review->rating ? '-fill' : '' }}"></i>
                    @endfor
                </td>
                <td class="text-muted">{{ Str::limit($review->comment, 60) ?: '—' }}</td>
                <td class="text-muted small">{{ $review->created_at->format('d/m/Y') }}</td>
                <td>
                    <form method="POST" action="{{ route('admin.reviews.destroy', $review) }}" class="d-inline"
                          onsubmit="return confirm('¿Eliminar esta reseña?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Eliminar">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="7" class="text-center text-muted py-4">No hay reseñas registradas.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
