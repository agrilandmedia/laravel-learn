@props(['post', 'height', 'width'])

<a href="/posts/{{ $post->slug }}">
    <img src="{{ asset('storage/' . $post->avatar) }}" alt="{{ $post->title }}" height="{{ $height }}" width="{{ $width }}" class="rounded-lg">
</a>