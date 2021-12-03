<x-layout>
    <x-form.form-wrapper name="Register">
        <form method="POST" action="/register">
            @csrf
            <x-form.input name="name" />
            <x-form.input name="email" type="email" />
            <x-form.input name="password" type="password" />

            <x-form.button-wrapper>
                <x-form.button>Register</x-form.button>
            </x-form.button-wrapper>
        </form>
    </x-form.form-wrapper>
</x-layout>