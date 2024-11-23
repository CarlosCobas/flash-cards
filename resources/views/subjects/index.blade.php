<x-layout>
    <x-page-heading>All Subject</x-page-heading>
    <x-button href="/subjects/create">Create Subject</x-butotn>

    <ul class="mt-5">
        @foreach ($subjects as $subject)
            <li>
                <a href="/subjects/{{$subject->id}}">
                    <p>{{$subject->name}}</p>
                    <p>{{$subject->user->name}} - {{$subject->user->id}}</p>
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
