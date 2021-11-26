<x-layout>
    <main class="max-w-lg mx-auto mt-10 space-y-6">
        <h1 class="font-bold text-xl">Register</h1>

        <form method="POST" action="/register">
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                    Username
                </label>
                <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username" required>
            </div>
        </form>
    </main>
</x-layout>
