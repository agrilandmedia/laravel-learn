<x-layout>
    <div class="flex">
        <x-widget />

        <x-form.form-wrapper name="Create New Post" class="flex-1">
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
        </x-form.form-wrapper>
    </div>
</x-layout>