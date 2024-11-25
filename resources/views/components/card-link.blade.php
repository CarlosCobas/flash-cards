@props(['card'])
<a href="/cards/{{$card->id}}" class="w-full px-4 py-3 bg-white rounded-md shadow-md dark:bg-gray-800 flex flex-col">
    <div class="flex items-center justify-between">
        <span class="text-sm font-light text-gray-800 dark:text-gray-400">{{$card->topic->name}}</span>
        <span class="px-3 py-1 text-xs text-blue-800 uppercase bg-blue-200 rounded-full dark:bg-blue-300 dark:text-blue-900">{{$card->subject->name}}</span>
    </div>

    <div class="mb-1">
        <h2 class="mt-2 text-lg font-semibold text-gray-800 dark:text-white">{{$card->question}}</h2>
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">{{$card->answer}}</p>
    </div>

    <div class="mt-auto">
        <span class="text-xs text-gray-600 dark:text-gray-300">{{$card->created_at}}</span>
    </div>
</a>
