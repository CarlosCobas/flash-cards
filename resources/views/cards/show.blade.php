<x-layout>
    <x-page-heading>Show Card</x-page-heading>

    <div>
        <h2>Question: {{$card->question}}</h2>
        <h3>Answer: {{$card->answer}}</h2>
        <p>Related Topic: {{$card->topic->name}}</h2>
        <p>Related Subject: {{$card->subject->name}}</p>
        <p>User: {{$card->user->name}}</p>
    </div>

    <div class="mt-6">
        <x-button href="/cards/{{$card->id}}/edit">Edit Card</x-button>
    </div>

</x-layout>
