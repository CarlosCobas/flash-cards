<x-layout>
    <x-page-heading>Edit Topic</x-page-heading>
    <x-forms.form method="patch" action="/topics/{{$topic->id}}">
        <x-forms.input label="Name" name="name" placeholder="Give a name to this topic..." value="{{$topic->name}}"/>

        <x-forms.select label="Related Subject" name="subject">
            <option selected disabled>Select a Subject....</option>
            @foreach ($subjects as $subject)
                <option value="{{$subject->id}}" {{($topic->subject->is($subject)) ? "selected" :  "";}}>{{$subject->name}}</option>
            @endforeach
        </x-forms.select>

        <x-forms.button>Save Changes</x-forms.button>
    </x-forms.form>
</x-layout>
