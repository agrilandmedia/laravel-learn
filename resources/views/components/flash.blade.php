@if (session()->has('success'))
    <div x-data="{ show: true }" {{-- Apline JS feature to remove flash bag message after set time --}}
        x-init="setTimeout(() => show = false, 3000)"
        x-show="show"
        x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90"
        class="fixed bg-green-600 text-white py-2 px-4 rounded-lg bottom-4 right-4 text-md">
        <p>{{ session('success') }}</p>
    </div>
@endif