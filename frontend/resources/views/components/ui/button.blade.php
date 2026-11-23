@props([
    'varian' => 'success',
    'type' => 'button',
])

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'btn btn-' . $varian . ' fw-semibold px-4 py-2 rounded-3 shadow-sm']) }}>
    {{ $slot }}
</button>
