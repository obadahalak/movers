@extends('movers.layout')

@section('content')

<!--shahd -->
<header class="site-header header-style-6">


    @include('movers.header.navbar')
</header>


{{--  <div class="mt-26"></div>  --}}
<div class="container mx-auto px-4 mt-8 ">
    <div class="header">

       @include('movers.pages.vrachtvervoerder-inhuren.header')
    </div>

    <div class="">

        <div class="helpSection">
            @include('movers.pages.vrachtvervoerder-inhuren.help')
        </div>

        <div class="company-logo mt-20">
            @include('movers.pages.vrachtvervoerder-inhuren.companies-logo')
        </div>


        <div class="w-100 overflow-x-scroll">
            @include('movers.pages.vrachtvervoerder-inhuren.table')
        </div>

        <div class="mt-8 lg:p-8 p-4 border-2 rounded-md text-gray-800  ">
            <p class="mb-3">Voertuig te groot? Klik hier voor koeriersdienst </p>
            <p>Eilandtransporten zijn alleen mogelijk op aanvraag. Voertuigen hebben geen hefplatform (uitzondering:
                2,4t deellading). Voertuigen met een hefplatformkunnen pakketten vervoeren met een maximumgewicht van
                1000 kg en een maximale afmeting van 200 x 180 x 220 cm per pakket.</p>
            <div class="ml-8 mt-4">

                <ul class="list-disc list-outside  ">
                    <li>Koeriersrit inclusief 120 minuten voor laden, lossen en andere wachttijd. Elk extra uur of deel
                        daarvan 60,- EUR netto.</li>
                    <li>Koeriersrit inclusief 120 minuten voor laden, lossen en andere wachttijd. Elk extra uur of deel
                        daarvan 60,- EUR netto.</li>
                    <li>Koeriersrit inclusief 120 minuten voor laden, lossen en andere wachttijd. Elk extra uur of deel
                        daarvan 60,- EUR netto.</li>
                </ul>
            </div>
            <p class="mt-5">
                Als je een grotere bestelling hebt of een gedetailleerde offerte voor expeditietransport nodig hebt, kun
                je hier contact opnemen met ons verkoopteam en een aanvraag sturen.
            </p>
        </div>
        <button class="mt-8 lg:text-xl text-white font-semibold  bg-deep2Pink lg:p-3  p-2 lg:text-center text-start rounded-md hover:shadow-lg">Bereken
            Bereken prijs en boek direct
        </button>



        <div class="mt-16">

            <p class="text-gray-800 font-semibold lg:text-2xl text-xl">Zipmend vervoert deze zendingen als expediteur</p>
            <div class=" mt-6 grid  lg:grid-cols-3 md:grid-cols-2  lg:gap-20 gap-8 justify-center">
                @include('movers.pages.vrachtvervoerder-inhuren.cards')
            </div>

        </div>

        <div class="statistics mt-20">


            <p class="mb-10 text-gray-800 font-semibold lg:text-2xl text-xl">Sterk genetwerkt, geleverd in heel Europa
            </p>
            @include('movers.pages.vrachtvervoerder-inhuren.statistic-card')
        </div>

        <div class="mb-10 mt-10 lg:grid grid-cols-2 gap-10 justify-between">
            <div>

                <p class="text-gray-800 font-semibold lg:text-2xl text-xl">Vrachtwagen Transport - Top beoordelingen</p>
                <p class="mt-6">Meer dan 1.000 klanten zijn overtuigd van de vlotte en betrouwbare verwerking door onze vrachtwagen transporten.</p>
                <button class="mt-6 lg:text-xl text-white font-semibold  bg-deep2Pink lg:p-3  p-2 lg:text-center text-start rounded-md hover:shadow-lg">Bereken
                    Bereken prijs en boek direct
                </button>
                <img class="w-40 object-cover" src="https://zipmend.com/wp-content/uploads/2023/11/LKW-schnell.png" alt="">
            </div>

            <div class="">
                <div class="lg:p-5 p-2 border rounded-xl bg-white">
                    @include('movers.pages.vrachtvervoerder-inhuren.slider')

                </div>

                <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
            </div>


        </div>

    </div>
</div>
</div>
</div>
</div>
@endsection
