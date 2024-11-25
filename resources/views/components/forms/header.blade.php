
@props(['title', 'subtitle'])

<div class="flex justify-center mx-auto">
    <img class="w-auto h-7 sm:h-8" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
</div>

<h3 class="mt-3 text-xl font-medium text-center text-gray-600 dark:text-gray-200">{{$title}}</h3>

<p class="mt-1 text-center text-gray-500 dark:text-gray-400">{{$subtitle}}</p>
