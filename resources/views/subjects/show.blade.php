<x-layout>
    <x-page-heading>Show Subject</x-page-heading>

    <div>
        <h2>Subject Name: {{$subject->name}}</h2>
        <p>User: {{$subject->user->name}}</p>
    </div>

    <div class="mt-6">
        <x-button href="/subjects/{{$subject->id}}/edit">Edit Subject</x-button>
    </div>
</x-layout>
