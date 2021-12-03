<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Learn</title>
        {{-- <link rel="stylesheet" href="/app.css"> --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>
    <body style="font-family: Nunito, sans-serif">
        <section class="px-6 py-4">
            <nav class="md:flex md:justify-between md:items-center bg-gray-200 border border-black border-opacity-5 rounded-xl py-6 px-10">
                <div>
                    <a href="/">
                        <img src="/images/agriland_logo.svg" alt="Agriland Logo" width="165" height="16">
                    </a>
                </div>
    
                <div class="mt-8 md:mt-0 flex items-center">
                    @auth
                        <x-dropdown>
                            <x-slot name="trigger">
                                <span class="text-md font-bold mr-4">Hello, {{ auth()->user()->name }}</span>
                            </x-slot>

                            @if (Auth::user()->is_admin)
                                <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                            @endif
                            <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>

                            <form id="logout-form" method="POST" action="/logout" class="hidden">
                                @csrf
                            </form>
                        </x-dropdown>
                    @else
                        <a href="/register" class="text-xs font-bold uppercase">Register</a>
                        <a href="/login" class="text-xs font-bold uppercase ml-6 mr-6">Log In</a>
                    @endauth
                </div>
            </nav>

            {{ $slot }}

            <x-flash />
        
            <footer class="bg-gray-200 border border-black border-opacity-5 rounded-xl text-center pt-8 px-10 mt-10">
                <div class="mt-4">
                    <div class="relative inline-block mx-auto lg:bg-white rounded-lg">   
                        <form method="GET" action="#" class="lg:flex text-sm">
                            <div class="lg:py-3 lg:px-5 flex items-center">
                                <label for="email-subscribe" class="hidden lg:inline-block">
                                    <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                                </label>
                                <input id="email-subscribe" type="text" placeholder="Your email address" class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                            </div>
    
                            <x-form.button>Subscribe</x-form.button>
                        </form>
                    </div>
                </div>
                <p class="text-md py-10">Copyright &copy; Lunar Strain Ltd. {{ now()->year }}</p>
            </footer>
        </section>
    </body>
</html>