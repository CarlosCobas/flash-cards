<x-layout>
    <x-page-heading>All Card</x-page-heading>

    <x-button href="/cards/create">Create Card</x-butotn>

        <ul class="mt-5">
            @foreach ($cards as $card)
                <li>
                    <a href="/cards/{{$card->id}}">
                        <p>{{$card->question}}</p>
                        <p>{{$card->user->name}} - {{$card->user->id}}</p>
                        <p>{{$card->subject->name}} - {{$card->subject->id}}</p>
                        <p>{{$card->topic->name}} - {{$card->topic->id}}</p>
                    </a>
                </li>
            @endforeach
        </ul>
</x-layout>
