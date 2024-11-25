<form
    {{ $attributes->except(['method'])->merge(['class' => 'max-w-2xl mx-auto space-y-4']) }}
    method="{{ $attributes->get('method', 'GET') === 'GET' ? 'GET' : 'POST' }}"
>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @if (!in_array($attributes->get('method'), ['GET', 'POST']))
            @method($attributes->get('method'))
        @endif
    @endif

    {{ $slot }}
</form>
