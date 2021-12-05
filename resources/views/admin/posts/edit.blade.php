<x-layout>
    <div class="flex">
        <x-widget />

        <x-form.form-wrapper name="Edit New Post" class="flex-1">
            <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH') {{-- To say it's an Update --}}

                <x-form.input name="title" :value="$post->title" />
                <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
                <x-form.textarea name="body">{{ old('body', $post->body) }}</x-form.textarea>

                <x-form.field-wrapper>
                    <x-form.label name="category" />
                    <select name="category_id" id="category_id" class="border border-gray-400 rounded-md p-1">
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category', $post->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="category" />
                </x-form.field-wrapper>

                <x-form.input name="avatar" type="file" :value="$post->avatar" />

                <x-form.button-wrapper>
                    <x-form.button>Update Post</x-form.button>
                </x-form.button-wrapper>
            </form>
        </x-form.form-wrapper>
    </div>
</x-layout>