@extends('admin.layout')
@section('title', 'Enviar Notificación')

@section('content')
<div class="card p-4" style="max-width:600px">
    <h5 class="fw-bold mb-1">Enviar notificación</h5>
    <p class="text-muted small mb-4">Se enviará a todos los usuarios registrados y, si tienen la app instalada, recibirán una notificación push.</p>
    <form method="POST" action="{{ route('admin.notifications.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label fw-semibold">Título *</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" maxlength="255" required>
        </div>
        <div class="mb-3">
            <label class="form-label fw-semibold">Mensaje *</label>
            <textarea name="message" class="form-control" rows="4" required>{{ old('message') }}</textarea>
        </div>
        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary px-4">
                <i class="bi bi-send me-1"></i>Enviar
            </button>
            <a href="{{ route('admin.notifications.index') }}" class="btn btn-outline-secondary px-4">Cancelar</a>
        </div>
    </form>
</div>
@endsection
