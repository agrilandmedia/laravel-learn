<x-layout>
    <x-form.form-wrapper name="Log In">
        <form method="POST" action="/login">
            @csrf
            <x-form.input name="email" type="email" />
            <x-form.input name="password" type="password" />

            <x-form.button-wrapper>
                <x-form.button>Log In</x-form.button>
            </x-form.button-wrapper>
        </form>
    </x-form.form-wrapper>
</x-layout>