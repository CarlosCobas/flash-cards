@props(['title', 'link_text', 'link_url'])


<div class="flex items-center justify-center py-4 text-center bg-gray-50 dark:bg-gray-700">
    <span class="text-sm text-gray-600 dark:text-gray-200">{{$title}} </span>
    <a href="{{$link_url}}" class="mx-2 text-sm font-bold text-blue-500 dark:text-blue-400 hover:underline">{{$link_text}}</a>
</div>
