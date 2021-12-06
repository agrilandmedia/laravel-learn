<x-layout>
    <div class="flex">
        <x-widget />

        <x-form.form-wrapper name="Edit New User">
            <form method="POST" action="/admin/users/{{ $user->id }}">
                @csrf
                @method('PATCH') {{-- To say it's an Update --}}

                <x-form.input name="name" :value="$user->name" />
                <x-form.input name="is_admin" type="number" min="0" max="1" :value="$user->is_admin" />
                <x-form.input name="email" type="email" :value="$user->email" />

                <x-form.button-wrapper>
                    <x-form.button>Update User</x-form.button>
                </x-form.button-wrapper>
            </form>
        </x-form.form-wrapper>
    </div>
</x-layout>