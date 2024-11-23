<x-layout>
    <x-page-heading>Create Card</x-page-heading>
    <x-forms.form method="post" action="/cards/create">
        <x-forms.input label="Question" name="question" placeholder="What is the he Answer to the Ultimate Question of Life, the Universe, and Everything?"/>
        <x-forms.input label="Answer" name="answer" placeholder="42"/>

        <x-forms.select label="Related Topic" name="topic">
            <option selected disabled>Select a Topic....</option>
            @foreach ($topics as $topic)
                <option value="{{$topic->id}}">{{$topic->name}}</option>
            @endforeach
        </x-forms.select>

        <x-forms.button>Create</x-forms.button>
    </x-forms.form>

</x-layout>
