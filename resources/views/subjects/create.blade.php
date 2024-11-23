<x-layout>
    <x-page-heading>Create Subject</x-page-heading>
    <x-forms.form method="post" action="/subjects/create">
        <x-forms.input label="Name" name="name" placeholder="Give a name to this subject..." required/>
        <x-forms.button>Create</x-forms.button>
    </x-forms.form>
</x-layout>
