<x-layout>
    <x-page-heading>Edit Card</x-page-heading>
    <x-forms.form method="patch" action="/cards/{{$card->id}}">
        <x-forms.input
            label="Question"
            name="question"
            placeholder="What is the he Answer to the Ultimate Question of Life, the Universe, and Everything?"
            value="{{$card->question}}"
        />
        <x-forms.input
            label="Answer"
            name="answer"
            placeholder="42"
            value="{{$card->answer}}"
        />

        <x-forms.select label="Related Topic" name="topic">
            <option deafult disabled>Select a Topic....</option>
            @foreach ($topics as $topic)
                <option value="{{$topic->id}}" {{($card->topic->is($topic)) ? "selected" :  "";}}>{{$topic->name}}</option>
            @endforeach
        </x-forms.select>

        <x-forms.button>Save Changes</x-forms.button>
    </x-forms.form>

</x-layout>
