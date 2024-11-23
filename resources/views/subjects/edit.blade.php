<x-layout>
    <x-page-heading>Edit Subject</x-page-heading>
    <x-forms.form method="patch" action="/subjects/{{$subject->id}}">
        <x-forms.input label="Name" name="name" placeholder="Give a name to this subject..." value="{{$subject->name}}" required/>
        <x-forms.button>Save Changes</x-forms.button>
    </x-forms.form>
</x-layout>
