@props(['post'])

<span class="mt-2 block text-gray-400 text-xs italic">
    Published <time>{{ $post->created_at->diffForHumans() }}</time>
</span>