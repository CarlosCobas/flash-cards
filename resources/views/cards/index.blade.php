<x-layout>
    <section class="container px-4 mx-auto">
        <x-tables.heading title="Cards" subtitle="{{count($cards)}} cards" description="This are all the cards you have created" create_url="/cards/create" create_title="Create card"/>
        <x-tables.search-input />


        <div class="grid grid-cols-1 gap-6 mt-8 xl:mt-12 xl:gap-8 lg:grid-cols-2">
            @foreach ($cards as $card)
                <x-card-link :card="$card"/>
            @endforeach
        </div>

    </section>
</x-layout>
