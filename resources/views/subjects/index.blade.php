<x-layout>

    <section class="container px-4 mx-auto">
        <x-tables.heading title="Subjects" subtitle="{{count($subjects)}} subjects" description="This are all the subjects you have created" create_url="/subjects/create" create_title="Create subject"/>

        <x-tables.search-input />

        <x-tables.container>
            <x-tables.table>
                <x-tables.thead>
                    <x-tables.th> Subject </x-tables.th>
                    <x-tables.th> Total Subjects Linked </x-tables.th>
                    <x-tables.th> Total Cards Linked </x-tables.th>
                    <x-tables.th> Creation Date </x-tables.th>
                    <x-tables.th> <span class="sr-only">Edit</span> </x-tables.th>
                </x-tables.thead>
                <x-tables.tbody>
                    @foreach ($subjects as $subject)
                        <tr>
                            <x-tables.td link="/subjects/{{$subject->id}}">
                                {{$subject->name}}
                            </x-tables.td>
                            <x-tables.td>
                                {{count($subject->topics)}}
                            </x-tables.td>
                            <x-tables.td>
                                {{count($subject->cards)}}
                            </x-tables.td>
                            <x-tables.td>
                                {{$subject->created_at}}
                            </x-tables.td>
                            <x-tables.td>
                                <x-tables.dropdown-options />
                            </x-tables.td>
                        </tr>
                    @endforeach
                </x-tables.tbody>
            </x-tables.table>
        </x-tables.container>

        {{-- <div class="mt-6 sm:flex sm:items-center sm:justify-between ">
            <div class="text-sm text-gray-500 dark:text-gray-400">
                Page <span class="font-medium text-gray-700 dark:text-gray-100">1 of 10</span>
            </div>

            <div class="flex items-center mt-4 gap-x-4 sm:mt-0">
                <a href="#" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>

                    <span>
                        previous
                    </span>
                </a>

                <a href="#" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                    <span>
                        Next
                    </span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div> --}}
    </section>

</x-layout>
