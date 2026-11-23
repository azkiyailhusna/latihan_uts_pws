@props([
    'type' => 'checkbox',
    'name' => '',
    'id' => null,
    'value' => '',
    'checked' => false,
    'label' => '',
])

@php
    $generatedId = $id ?? ($name . '-' . \Illuminate\Support\Str::slug($value ?: $label ?: uniqid()));
@endphp

<div class="form-check mb-2">
    <input type="{{ $type }}" 
           name="{{ $name }}" 
           id="{{ $generatedId }}" 
           value="{{ $value }}" 
           class="form-check-input"
           @checked($checked) 
           {{ $attributes }}>
    <label class="form-check-label text-capitalize fw-normal user-select-none" for="{{ $generatedId }}">
        {{ $label }}
    </label>
</div>
