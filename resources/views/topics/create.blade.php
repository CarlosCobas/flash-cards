<x-layout>
    <x-page-heading>Create Topic</x-page-heading>
    <x-forms.form method="post" action="/topics/create">
        <x-forms.input label="Name" name="name" placeholder="Give a name to this topic..." />

        <x-forms.select label="Related Subject" name="subject" >
            <option selected disabled>Select a Subject....</option>
            @foreach ($subjects as $subject)
                <option value="{{$subject->id}}">{{$subject->name}}</option>
            @endforeach
        </x-forms.select>

        <x-forms.button>Create</x-forms.button>
    </x-forms.form>
</x-layout>
