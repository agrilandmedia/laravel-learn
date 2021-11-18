@extends ('layout')

@section ('content')
    <article>
        <h1>{{ $post->title }}</h1>
        <div class="category-date-container">
            <p class="post-category">
                {{ $post->category->name }}
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
@endsection