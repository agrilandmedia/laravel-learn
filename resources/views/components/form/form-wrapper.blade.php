@props(['name'])

<main class="max-w-2xl flex-1 mx-auto mt-10 space-y-6 bg-gray-200 border border-gray-300 p-6 rounded-lg">
    <h1 class="font-bold text-xl">{{ $name }}</h1>
    {{ $slot }}
</main>