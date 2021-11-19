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
    </head>
    <body style="font-family: Nunito, sans-serif">
        <section class="px-6 py-4">
            <nav class="md:flex md:justify-between md:items-center bg-gray-200 border border-black border-opacity-5 rounded-xl py-6 px-10">
                <div>
                    <a href="/">
                        <img src="/images/agriland_logo.svg" alt="Agriland Logo" width="165" height="16">
                    </a>
                </div>
    
                <div class="mt-8 md:mt-0">
                    <a href="/" class="text-xs font-bold uppercase">Home Page</a>
    
                    <a href="#" class="bg-green-700 transition-colors duration-300 hover:bg-green-600 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                        Subscribe for Updates
                    </a>
                </div>
            </nav>

            {{ $slot }}
        
            <footer class="bg-gray-200 border border-black border-opacity-5 rounded-xl text-center pt-8 px-10 mt-10">
                <div class="mt-4">
                    <div class="relative inline-block mx-auto lg:bg-white rounded-full">   
                        <form method="POST" action="#" class="lg:flex text-sm">
                            <div class="lg:py-3 lg:px-5 flex items-center">
                                <label for="email" class="hidden lg:inline-block">
                                    <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                                </label>
                                <input id="email" type="text" placeholder="Your email address" class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                            </div>
    
                            <button type="submit" class="transition-colors duration-300 bg-green-700 hover:bg-green-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
                <p class="text-md py-10">Copyright &copy; Lunar Strain Ltd. {{ now()->year }}</p>
            </footer>
        </section>
    </body>
</html>