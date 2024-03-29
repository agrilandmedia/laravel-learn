<x-layout>
    @include ('posts._header')

    <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                <img src="{{ asset('storage/' . $post->avatar) }}" alt="{{ $post->title }}" class="rounded-lg">

                <x-post-published :post="$post" />

                <div class="flex items-center lg:justify-center text-sm mt-4">
                    <img src="https://i.pravatar.cc/50?u={{ $post->user_id }}" alt="Author Image" class="rounded-lg">
                    <div class="ml-3 text-left">
                        <h5 class="font-bold">
                            By
                            <a href="/authors/{{ $post->author->name }}">
                                {{ ucfirst(trans($post->author->name)) }}
                            </a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-span-8">
                <div class="hidden lg:flex justify-between mb-6">
                    <a href="/" class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-green-600">
                        <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path>
                                <path class="fill-current" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                            </g>
                        </svg>
                        Back to Posts
                    </a>

                    <x-post-category :post="$post" />
                </div>

                <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                    {{ $post->title }}
                </h1>

                <div class="space-y-4 lg:text-lg leading-loose">
                    {{ $post->body }}
                </div>
            </div>

            <section class="col-span-8 col-start-5 space-y-6">
                @auth {{-- Only if User is logged in --}}
                    <form method="POST" action="/posts/{{ $post->slug }}/comments" class="bg-gray-200 p-6 rounded-lg border border-gray-300">
                        @csrf
                        <header class="flex text-center">
                            <img src="https://i.pravatar.cc/70?u={{ auth()->id() }}" height="35" width="35" alt="Random Image" class="rounded-full">
                            <h2 class="ml-3">Comments Section</h2>
                        </header>

                        <div class="mt-4">
                            <textarea name="comment" cols="25" rows="5" class="w-full rounded-lg" placeholder="Place your comment"></textarea>
                        </div>
                        <x-form.error name="comment" />

                        <x-form.button-wrapper>
                            <x-form.button>Save Comment</x-form.button>
                        </x-form.button-wrapper>
                    </form>
                @else
                    <p class="text-gray-400 text-sm italic">
                        Log in to write a comment
                    </p>
                @endauth
                @foreach ($post->comments as $comment)
                    <x-post-comment :comment="$comment" />
                @endforeach
            </section>
        </article>
    </main>
</x-layout>