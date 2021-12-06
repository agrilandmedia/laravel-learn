@props(['comment'])

<article class="flex bg-gray-200 p-6 rounded-lg border border-gray-300">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/70?u={{ $comment->user_id }}" height="70" width="70" alt="Random Image" class="rounded-lg">
    </div>
    <div class="ml-6">
        <header>
            <h2 class="text-xl">{{ $comment->author->name }}</h2>
            <p class="text-xs text-gray-400 italic">
                <time>
                    {{ $comment->created_at->diffForHumans() }}
                </time>
            </p>
        </header>
        <p>
            {{ $comment->body }}
        </p>
    </div>
</article>