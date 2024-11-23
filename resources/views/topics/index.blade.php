<x-layout>
    <x-page-heading>All Topic</x-page-heading>
    <x-button href="/topics/create">Create Topic</x-butotn>

    <ul class="mt-5">
        @foreach ($topics as $topic)
            <li>
                <a href="/topics/{{$topic->id}}">
                    <p>{{$topic->name}}</p>
                    <p>{{$topic->user->name}} - {{$topic->user->id}}</p>
                    <p>{{$topic->subject->name}} - {{$topic->user->id}}</p>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
