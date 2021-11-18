@extends ('layout')

@section ('content')
    <h1>Posts</h1>
    @foreach ($posts as $post)
        <article>
            <a href="/posts/{{ $post->slug }}">
                <h3>{{ $post->title }}</h3>
            </a>
            <div class="category-date-container">
                <p class="post-category">
                    <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>
                <p class="post-date">
                    {{ $post->created_at }}
                </p>
            </div>
            <p>
                {{ $post->excerpt }}
            </p>
        </article>
    @endforeach
@endsection