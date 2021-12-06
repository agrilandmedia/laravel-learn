@props(['post'])

<article class="bg-gray-200 border border-black border-opacity-0 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="mr-8">
            <x-post-thumbnail :post="$post" height="400" width="440" />
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <x-post-category :post="$post" />

                <div class="mt-4">
                    <x-post-title :post="$post" />
                    <x-post-published :post="$post" />
                </div>
            </header>

            <div class="text-sm mt-2">
                {{ $post->excerpt }}
            </div>

            <x-post-card-footer :post="$post" />
        </div>
    </div>
</article>