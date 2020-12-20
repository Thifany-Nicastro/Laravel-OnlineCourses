<label for="{{ $field }}" class="form-label">{{ $label }}</label>

<input type="{{ $type ?? 'text' }}" class="form-control @error($field) is-invalid @enderror" id="{{ str_replace('_', '-', $field) }}" name="{{ $field }}" value="{{ $value }}">

<div class="invalid-feedback">
    @error($field){{ $message }}@enderror
</div>