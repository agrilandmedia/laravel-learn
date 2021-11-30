@props(['post'])

<article class="bg-gray-200 border border-black border-opacity-0 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            <a href="/posts/{{ $post->slug }}">
                <img src="/images/harvest.jpeg" alt="Blog Post illustration" class="rounded-lg">
            </a>
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <a href="/categories/{{ $post->category->slug }}" class="px-3 py-1 border border-green-600 rounded-full text-green-600 text-xs uppercase font-semibold" style="font-size: 10px">
                        {{ $post->category->name }}
                    </a>
                </div>

                <div class="mt-4">
                    <a href="/posts/{{ $post->slug }}">
                        <h1 class="text-3xl">
                            {{ $post->title }}
                        </h1>
                    </a>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2">
                {{ $post->excerpt }}
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="https://i.pravatar.cc/55" alt="Lary avatar" class="rounded-lg">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            By
                            <a href="/authors/{{ $post->author->name }}">
                                {{ ucfirst(trans($post->author->name)) }}
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <a href="/posts/{{ $post->slug }}" class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">
                        Read More
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>