@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2">
    <label class="block text-sm text-gray-800 dark:text-gray-200" for="{{ $name }}">{{ $label }}</label>
</div>
