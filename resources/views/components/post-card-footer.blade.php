@props(['post'])

<footer class="flex justify-between items-center mt-8">
    <div class="flex items-center text-sm">
        <img src="https://i.pravatar.cc/50?u={{ $post->user_id }}" alt="Author Image" class="rounded-lg">
        <div class="ml-3">
            <h5 class="font-bold">
                By
                <a href="/authors/{{ $post->author->name }}">
                    {{ ucfirst(trans($post->author->name)) }}
                </a>
            </h5>
        </div>
    </div>

    <div>
        <x-form.button>
            <a href="/posts/{{ $post->slug }}">Read More</a>
        </x-form.button>
    </div>
</footer>