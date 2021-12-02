<x-layout>
    <main class="max-w-lg mx-auto mt-10 space-y-6 bg-gray-200 border border-gray-300 p-6 rounded-lg">
        <h1 class="font-bold text-xl">Create New Post</h1>

        <form method="POST" action="/admin/posts/store">
            @csrf
            <div class="mb-6">

            </div>

            <div class="mb-6 flex justify-end">
                <x-button>
                    <button type="submit">Create Post</button>
                </x-button>
            </div>
        </form>
    </main>
</x-layout>