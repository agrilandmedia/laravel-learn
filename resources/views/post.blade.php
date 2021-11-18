@extends ('layout')

@section ('content')
    <article>
        <h1>{{ $post->title }}</h1>
        <p class="post-date">
            {{ $post->created_at }}
        </p>
        <div>
            {!! $post->body !!}
        </div>
    </article>
    <a href="/">Go Back to Posts Page</a>
@endsection