<x-layout>
    <main class="max-w-lg mx-auto mt-10 space-y-6 bg-gray-200 border border-gray-300 p-6 rounded-lg">
        <h1 class="font-bold text-xl">Create New Post</h1>

        <form method="POST" action="/admin/posts/store" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                    Title
                </label>
                <input class="border border-gray-400 p-2 w-full rounded-md" type="text" name="title" id="title" value="{{ old('title') }}">
                @error('title')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                    Excerpt
                </label>
                <textarea name="excerpt" cols="25" rows="5" class="border border-gray-400 w-full rounded-md" value="{{ old('excerpt') }}"></textarea>
                @error('excerpt')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                    Body
                </label>
                <textarea name="body" id="body" cols="25" rows="5" class="border border-gray-400 w-full rounded-md" value="{{ old('body') }}"></textarea>
                @error('body')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
                    Category
                </label>
                <select name="category_id" id="category_id" class="border border-gray-400 rounded-md p-1">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="avatar">
                    Avatar
                </label>
                <input class="border border-gray-400 p-2 w-full rounded-md" type="file" name="avatar" id="avatar">
                @error('avatar')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 flex justify-end">
                <x-button>
                    <button type="submit">Create Post</button>
                </x-button>
            </div>
        </form>
    </main>
</x-layout>