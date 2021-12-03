<x-layout>
    <main class="max-w-lg mx-auto mt-10 space-y-6 bg-gray-200 border border-gray-300 p-6 rounded-lg">
        <h1 class="font-bold text-xl">Create New Post</h1>

        <form method="POST" action="/admin/posts/store" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" />
            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />

            <x-form.field-wrapper>
                <x-form.label name="category" />
                <select name="category_id" id="category_id" class="border border-gray-400 rounded-md p-1">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-form.error name="category" />
            </x-form.field-wrapper>

            <x-form.input name="avatar" type="file" />

            <x-form.button-wrapper>
                <x-form.button>Create Post</x-form.button>
            </x-form.button-wrapper>
        </form>
    </main>
</x-layout>