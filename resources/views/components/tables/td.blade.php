@props(['link'])

<td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
    <div class="text-center">
        @if (isset($link))
            <a href="{{$link}}">
                <h4 class="text-gray-700 dark:text-gray-200">{{$slot}}</h4>
            </a>
        @else
            <h4 class="text-gray-700 dark:text-gray-200">{{$slot}}</h4>
        @endif
    </div>
</td>
