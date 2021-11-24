@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm hover:bg-green-600 focus:bg-green-600';

    if ($active) $classes .= ' bg-green-600';
@endphp

{{-- Merge attr with _posts-header x-dropdown item --}}
<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>