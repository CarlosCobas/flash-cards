<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Flash Cards</title>
        @vite(['resources/js/app.js', 'resources/css/app.css'])

    </head>
    <body class="bg-black text-white font-hanken-grotesk pb-20">

        <div class="px-10">
            <nav class="flex justify-between items-center py-4 border-b border-white/10">
                <div>
                    <a href="/">
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                    </a>
                </div>

                <div class="space-x-6 font-bold">
                    <a href="/cards">Cards</a>
                    <a href="/subjects">Subjects</a>
                    <a href="/topics">Topics</a>
                </div>

                @auth
                    <div>
                        <x-forms.form method="delete" action="/logout">
                            <x-forms.button>Log Out</x-form-button>
                        </x-forms.form>
                    </div>
                @endauth

                @guest
                    <div class="space-x-6 font-bold">
                        <a href="/register">Sign Up</a>
                        <a href="/login">Log In</a>
                    </div>
                @endguest
            </nav>

            <main class="mt-10 max-w-[986px] mx-auto">
                {{$slot}}
            </main>
        </div>

    </body>
</html>
