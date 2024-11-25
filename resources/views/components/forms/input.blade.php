@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        // 'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full',
        'class' => 'block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300',
        'value' => old($name)
    ];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>

