@extends ('layout')

@section ('content')
    <h1>Posts</h1>
    @foreach ($posts as $post)
        <article>
            <a href="/posts/{{ $post->slug }}">
                <h3>{{ $post->title }}</h3>
                <p class="post-date">
                    {{ $post->date }}
                </p>
                <p>
                    {{ $post->excerpt }}
                </p>
            </a>
        </article>
    @endforeach
@endsection