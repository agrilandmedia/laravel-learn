<x-layout>
    <h1>{{ $post->title }}</h1>
    <article>
        <p class="by-author">
            By <a href="/authors/{{ $post->author->name }}">{{ ucfirst(trans($post->author->name)) }}</a>
        </p>
        <div class="category-date-container">
            <p class="post-category">
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <p class="post-date">
                {{ $post->created_at }}
            </p>
        </div>
        <div>
            {!! $post->body !!}
        </div>
    </article>
    <a href="/">Go Back to Posts Page</a>
</x-layout>