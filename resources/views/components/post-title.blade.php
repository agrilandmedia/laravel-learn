@props(['post'])

<a href="/posts/{{ $post->slug }}">
    <h1 class="text-3xl">
        {{ $post->title }}
    </h1>
</a>