<x-layout>
    <x-page-heading>Show Topic</x-page-heading>

    <div>
        <h2>Topic Name: {{$topic->name}}</h2>
        <p>Related Subject: {{$topic->subject->name}}</p>
        <p>User: {{$topic->user->name}}</p>
    </div>

    <div class="mt-6">
        <x-button href="/topics/{{$topic->id}}/edit">Edit Topic</x-button>
    </div>
</x-layout>
