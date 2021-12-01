<x-layout>
    <main class="max-w-lg mx-auto mt-10 space-y-6 bg-gray-200 border border-gray-300 p-6 rounded-lg">
        <h1 class="font-bold text-xl">Log In</h1>
        <form method="POST" action="/login">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                    Email
                </label>
                <input class="border border-gray-400 p-2 w-full rounded-md" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-600 text-sm mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                    Password
                </label>
                <input class="border border-gray-400 p-2 w-full rounded-md" type="password" name="password" id="password" required>
                @error('password')
                    <p class="text-red-600 text-sm mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-6 flex justify-end">
                <x-button>
                    <button type="submit">Log In</button>
                </x-button>
            </div>
        </form>
    </main>
</x-layout>