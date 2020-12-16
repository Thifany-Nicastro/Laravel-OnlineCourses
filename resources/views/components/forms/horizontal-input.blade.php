<label for="{{ $field }}" class="col-sm-4 col-form-label text-sm-end">{{ $label }}</label>

<div class="col-sm-6">
    <input type="{{$type ?? 'text'}}" class="form-control @error($field) is-invalid @enderror" id="{{ $field }}" name="{{ $field }}" value="{{ $value }}" autocomplete="{{ $field }}">

    <div class="invalid-feedback">
        @error($field){{ $message }}@enderror
    </div>
</div>