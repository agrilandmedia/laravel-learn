@props(['post'])

<article class="transition-colors duration-300 hover:bg-gray-200 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5">
        <div>
            <x-post-thumbnail :post="$post" height="311" width="342" />
        </div>

        <div class="mt-8 flex flex-col justify-between">
            <header>
                <x-post-category :post="$post" />

                <div class="mt-4">
                    <x-post-title :post="$post" />
                    <x-post-published :post="$post" />
                </div>
            </header>

            <div class="text-sm mt-4">
                {{ $post->excerpt }}
            </div>

            <x-post-card-footer :post="$post" />
        </div>
    </div>
</article>