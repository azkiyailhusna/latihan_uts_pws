@props([
    'varian' => 'success', //defaultnya jika tdk didefinisikan
    'type' => '', //bawaannya dari native html
])
<button type="{{ $type }}" class="btn btn-{{ $varian }}">
    {{ $slot }}
</button>
