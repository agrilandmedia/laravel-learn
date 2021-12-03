@props(['post'])

<div class="space-x-2">
    <a href="/categories/{{ $post->category->slug }}" class="px-3 py-1 border border-green-600 rounded-md text-green-600 text-xs uppercase font-semibold" style="font-size: 10px">
        {{ $post->category->name }}
    </a>
</div>