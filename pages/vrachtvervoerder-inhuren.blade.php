@extends('movers.layout')

@section('css')

<script src="https://cdn.tailwindcss.com"></script>

<link href="{{ asset('movers/css/output.css') }}" rel="stylesheet">


@endsection

@section('content')

<!--shahd -->
<header class="site-header header-style-6">


    @include('movers.header.topNavbar')
</header>


{{--  <div class="mt-26"></div>  --}}
<div class="container mx-auto px-4 mt-8 ">
    <div class="header">

        <div class=" lg:font-medium	">
            <p class="text-deepPink ">VRACHTWAGEN TRANSPORT VRACHTVERVOERDER INHUREN</p>
            <h2 class="text-gray-800 lg:text-4xl text-2xl mt-2">Vracht snel en veilig leveren</h2>
        </div>

        <div class="lg:grid  grid-cols-2 gap-4 mx-4 mt-8  ">
            <div class="justify-self-start ">
                <div class="flex ">
                    <div class="m-2 self-start mt-">
                        <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#2ad3b9">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">
                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#2ad3b9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>

                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-800 font-semibold lg:text-2xl text-lg ">Snelle afhaling - Vandaag</p>
                        <p class="text-gray-800 lg:text-lg">Gedeeltelijke lading in slechts 6 uur en volledige lading
                            in slechts 20 uur - of op het gewenste tijdstip - Vrachtvervoerder inhuren</p>
                    </div>

                </div>

                <div class="flex mt-4 ">
                    <div class="m-2 self-start mt-">
                        <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#2ad3b9">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">
                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#2ad3b9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>

                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-800 font-semibold lg:text-2xl text-lg ">Snelle afhaling - Vandaag</p>
                        <p class="text-gray-800 lg:text-lg">Gedeeltelijke lading in slechts 6 uur en volledige lading
                            in slechts 20 uur - of op het gewenste tijdstip - Vrachtvervoerder inhuren</p>
                    </div>

                </div>

                <div class="flex mt-4 ">
                    <div class="m-2 self-start mt-">
                        <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#2ad3b9">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">
                                <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#2ad3b9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>

                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-800 font-semibold lg:text-2xl text-lg ">Snelle afhaling - Vandaag</p>
                        <p class="text-gray-800 lg:text-lg">Gedeeltelijke lading in slechts 6 uur en volledige lading
                            in slechts 20 uur - of op het gewenste tijdstip - Vrachtvervoerder inhuren</p>
                    </div>

                </div>


                <div class="bottom-header mt-6">

                    <button class="lg:text-xl text-white font-semibold  bg-deep2Pink lg:p-3  p-2 lg:text-center text-start rounded-md hover:shadow-lg">Bereken
                        Vrachtvervoerder inhuren en boek direct</button>
                    <p class="mt-3 text-gray-800">Meer dan 36.000 items geleverd in de afgelopen 12 maanden</p>
                </div>
            </div>

            <div class="  md:justify-self-center lg:justify-self-center w-100 	 ">
                <img class="object-cover  w-[400px] mx-auto  " src="https://zipmend.com/wp-content/uploads/2023/08/LKW-fuer-Teil-und-Komplettladung-zipmend.png" alt="">
            </div>
        </div>
    </div>

    <div class="">

        <div class="helpSection">
            <div class="">
                <p class="text-gray-800 text-2xl font-bold">Wij leveren deze voordelen</p>

                <div class="mt-8">
                    <div class="grid   lg:grid-cols-3 md:grid-cols-2 justify-center   gap-16">

                        <div class="flex ">
                            <div>
                                <p class="text-gray-800 font-semibold text-lg">Persoonlijk contact</p>
                                <p class="text-gray-800 mt-2 ">Wij zijn telefonisch bereikbaar en bieden
                                    duidelijkheid
                                    bij vragen.</p>
                            </div>
                            <div class="">
                                <img class="w-20" src="https://zipmend.com/wp-content/uploads/2022/08/Persoonlijk-contact.png" alt="">
                            </div>
                        </div>
                        <div class="flex">
                            <div>
                                <p class="text-gray-800 font-semibold text-lg">Persoonlijk contact</p>
                                <p class="text-gray-800 mt-2 ">Wij zijn telefonisch bereikbaar en bieden
                                    duidelijkheid
                                    bij vragen.</p>
                            </div>
                            <div class="">
                                <img class="w-20" src="https://zipmend.com/wp-content/uploads/2022/08/Persoonlijk-contact.png" alt="">
                            </div>
                        </div>
                        <div class="flex">
                            <div>
                                <p class="text-gray-800 font-semibold text-lg">Persoonlijk contact</p>
                                <p class="text-gray-800 mt-2 ">Wij zijn telefonisch bereikbaar en bieden
                                    duidelijkheid
                                    bij vragen.</p>
                            </div>
                            <div class="">
                                <img class="w-20" src="https://zipmend.com/wp-content/uploads/2022/08/Persoonlijk-contact.png" alt="">
                            </div>
                        </div>
                        <div class="flex">
                            <div>
                                <p class="text-gray-800 font-semibold text-lg">Persoonlijk contact</p>
                                <p class="text-gray-800 mt-2 ">Wij zijn telefonisch bereikbaar en bieden
                                    duidelijkheid
                                    bij vragen.</p>
                            </div>
                            <div class="">
                                <img class="w-20" src="https://zipmend.com/wp-content/uploads/2022/08/Persoonlijk-contact.png" alt="">
                            </div>
                        </div>
                        <div class="flex">
                            <div>
                                <p class="text-gray-800 font-semibold text-lg">Persoonlijk contact</p>
                                <p class="text-gray-800 mt-2 ">Wij zijn telefonisch bereikbaar en bieden
                                    duidelijkheid
                                    bij vragen.</p>
                            </div>
                            <div class="">
                                <img class="w-20" src="https://zipmend.com/wp-content/uploads/2022/08/Persoonlijk-contact.png" alt="">
                            </div>
                        </div>
                        <div class="flex">
                            <div>
                                <p class="text-gray-800 font-semibold text-lg">Persoonlijk contact</p>
                                <p class="text-gray-800 mt-2 ">Wij zijn telefonisch bereikbaar en bieden
                                    duidelijkheid
                                    bij vragen.</p>
                            </div>
                            <div class="">
                                <img class="w-20" src="https://zipmend.com/wp-content/uploads/2022/08/Persoonlijk-contact.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="company-logo mt-20">
            <div>

                <p class="text-gray-800 font-bold lg:text-3xl text-xl">
                    Meer dan 20.000 bedrijven verzenden sneller met zipmend
                </p>


                <div class=" mb-16 shadow-2xl border-2 p-4 rounded-xl mt-6">
                    <div class="flex flex-wrap justify-around items-center lg:gap-12 md:gap-8 gap-4 ">
                        <img class="w-40" style="filter: brightness(75%);" src="https://zipmend.com/wp-content/uploads/2022/08/Klantenlogo-Donau-Chemie.png" alt="">
                        <img class="w-40" style="filter: brightness(75%);" src="https://zipmend.com/wp-content/uploads/2022/08/Klantenlogo-Donau-Chemie.png" alt="">
                        <img class="w-40" style="filter: brightness(75%);" src="https://zipmend.com/wp-content/uploads/2022/08/Klantenlogo-Donau-Chemie.png" alt="">
                        <img class="w-40" style="filter: brightness(75%);" src="https://zipmend.com/wp-content/uploads/2022/08/Klantenlogo-Donau-Chemie.png" alt="">
                        <img class="w-40" style="filter: brightness(75%);" src="https://zipmend.com/wp-content/uploads/2022/08/Klantenlogo-Donau-Chemie.png" alt="">
                        <img class="w-40" style="filter: brightness(75%);" src="https://zipmend.com/wp-content/uploads/2022/08/Klantenlogo-Donau-Chemie.png" alt="">
                        <img class="w-40" style="filter: brightness(75%);" src="https://zipmend.com/wp-content/uploads/2022/08/Klantenlogo-Donau-Chemie.png" alt="">
                        <img class="w-40" style="filter: brightness(75%);" src="https://zipmend.com/wp-content/uploads/2022/08/Klantenlogo-Donau-Chemie.png" alt="">
                        <img class="w-40" style="filter: brightness(75%);" src="https://zipmend.com/wp-content/uploads/2022/08/Klantenlogo-Donau-Chemie.png" alt="">
                    </div>

                </div>

                <div class="info mt-16">
                    <p class="text-gray-800 font-semibold lg:text-2xl text-xl">Prijsoverzicht vrachtwagen transport –
                        Gedeeltelijke en volledige lading– Goedkoop</p>
                    <p class="mt-4 text-gray-800">In de prijslijst vindt u onze gunstige expeditiekosten
                        binnen Nederland voor deel- en compleetladingen. Voor een exacte
                        vrachtprijsberekening en boeking kunt u onze prijscalculator gebruiken.</p>
                </div>
            </div>
        </div>


        <div class="w-100 overflow-x-scroll">


            <table class="mx-auto table-fixed ">
                <thead>
                    <tr class="">
                        <th class="lg:p-8 p-4 text-sm"></th>
                        <th class="lg:p-8 p-4 text-sm">Prijs</th>
                        <th class="lg:p-8 p-4 text-sm">Pick-up tijd</th>
                        <th class="lg:p-8 p-4 text-sm">Afmetingen</th>
                        <th class="lg:p-8 p-4 text-sm">Laadvermogen</th>
                        <th class="lg:p-8 p-4 text-sm"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-100">
                        <td class="p-2 text-center border-2 border-white">5t gedeeltelijke lading</td>
                        <td class="p-2 text-center text-red-600 border-2 border-white">vanaf 149€ </td>
                        <td class="p-2 text-center border-2 border-white">1961</td>
                        <td class="p-2 text-center border-2 border-white">van 0-3 uur </td>
                        <td class="p-2 text-center border-2 border-white">600 x 240 x 230 cm(14 Europallets)</td>
                        <td class="lg:p-2 text-center border-2 border-white"><img class="lg:p-4 lg:w-40  w-80 mx-auto" src="https://zipmend.com/wp-content/uploads/2023/06/5t-Truck.png" alt=""> </td>
                    </tr>

                    <tr class="bg-white">
                        <td class="p-2 text-center border-2 border-white">5t gedeeltelijke lading</td>
                        <td class="p-2 text-center text-red-600 border-2 border-white">vanaf 149€ </td>
                        <td class="p-2 text-center border-2 border-white">1961</td>
                        <td class="p-2 text-center border-2 border-white">van 0-3 uur </td>
                        <td class="p-2 text-center border-2 border-white">600 x 240 x 230 cm(14 Europallets)</td>
                        <td class="lg:p-2 text-center border-2 border-white"><img class="lg:p-4 lg:w-40  w-80 mx-auto" src="https://zipmend.com/wp-content/uploads/2023/06/5t-Truck.png" alt=""> </td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td class="p-2 text-center border-2 border-white">5t gedeeltelijke lading</td>
                        <td class="p-2 text-center text-red-600 border-2 border-white">vanaf 149€ </td>
                        <td class="p-2 text-center border-2 border-white">1961</td>
                        <td class="p-2 text-center border-2 border-white">van 0-3 uur </td>
                        <td class="p-2 text-center border-2 border-white">600 x 240 x 230 cm(14 Europallets)</td>
                        <td class="lg:p-2 text-center border-2 border-white"><img class="lg:p-4 lg:w-40  w-80 mx-auto" src="https://zipmend.com/wp-content/uploads/2023/06/5t-Truck.png" alt=""> </td>
                    </tr>

                </tbody>
            </table>
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



                <div class="flex flex-col justify-center place-items-center	border-b-[20px] border-yellow-500  rounded-2xl shadow-xl px-8">
                    <div class="mt-4 mb-5 ">

                        <svg width="100px" height="100px" viewBox="0 0 1024 1024" class="icon " version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">

                                <path d="M928.1 881v44H95.9V99h44v782z" fill="#39393A" />

                                <path d="M352 435.7v403.4H204V435.7h148m22-22H182v447.4h192V413.7zM608 307.9v531.2H460V307.9h148m22-22H438v575.2h192V285.9z" fill="#39393A" />

                                <path d="M866.1 177.3v663.9H714V177.3h152.1m20-20H694v703.9h192V157.3h0.1z" fill="#E73B37" />

                            </g>

                        </svg>
                    </div>
                    <div class="text-center text-gray-400 ">

                        <p>Tot 33 europallets</p>
                        <p class="">of</p>
                        <p class="mb-2">tot 26 industriële pallets</p>
                    </div>
                </div>

                <div class="flex flex-col justify-center place-items-center	border-b-[20px] border-yellow-500  rounded-2xl shadow-xl">
                    <div class="mt-4 mb-5">

                        <svg width="100px" height="100px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">

                                <path d="M928.1 881v44H95.9V99h44v782z" fill="#39393A" />

                                <path d="M352 435.7v403.4H204V435.7h148m22-22H182v447.4h192V413.7zM608 307.9v531.2H460V307.9h148m22-22H438v575.2h192V285.9z" fill="#39393A" />

                                <path d="M866.1 177.3v663.9H714V177.3h152.1m20-20H694v703.9h192V157.3h0.1z" fill="#E73B37" />

                            </g>

                        </svg>
                    </div>
                    <div class="text-center text-gray-400 ">

                        <p>Tot 33 europallets</p>
                        <p class="">of</p>
                        <p class="mb-2">tot 26 industriële pallets</p>
                    </div>
                </div>

                <div class="flex flex-col justify-center place-items-center	border-b-[20px] border-yellow-500  rounded-2xl shadow-xl">
                    <div class="mt-4 mb-5">

                        <svg width="100px" height="100px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">

                                <path d="M928.1 881v44H95.9V99h44v782z" fill="#39393A" />

                                <path d="M352 435.7v403.4H204V435.7h148m22-22H182v447.4h192V413.7zM608 307.9v531.2H460V307.9h148m22-22H438v575.2h192V285.9z" fill="#39393A" />

                                <path d="M866.1 177.3v663.9H714V177.3h152.1m20-20H694v703.9h192V157.3h0.1z" fill="#E73B37" />

                            </g>

                        </svg>
                    </div>
                    <div class="text-center text-gray-400 ">

                        <p>Tot 33 europallets</p>
                        <p class="">of</p>
                        <p class="mb-2">tot 26 industriële pallets</p>
                    </div>
                </div>



            </div>

        </div>

        <div class="staticses mt-20">


            <p class="mb-10 text-gray-800 font-semibold lg:text-2xl text-xl">Sterk genetwerkt, geleverd in heel Europa
            </p>
            <div class="lg:p-10 p-4 border rounded-xl shadow-xl lg:flex lg:flex-row flex-col justify-between  justify-items-center ">
                <div class="text-center lg:mt ">
                    <p class="text-gray-600 font-bold lg:text-6xl text-4xl">>3.500</p>
                    <p class="lg:mt-3 mt-1  text-gray-800">zendingen per maand</p>
                </div>
                <div class="text-center lg:mt-0 mt-6">
                    <p class="text-gray-600 font-bold lg:text-6xl text-4xl">>3.500</p>
                    <p class="lg:mt-3 mt-1  text-gray-800">zendingen per maand</p>
                </div>
                <div class="text-center lg:mt-0 mt-6">
                    <p class="text-gray-600 font-bold lg:text-6xl text-4xl">>3.500</p>
                    <p class="lg:mt-3 mt-1  text-gray-800">zendingen per maand</p>
                </div>
            </div>
            <div class="mt-10">

                <p>Onze ervaring met gedeeltelijke en volledige ladingen voor belangrijke zendingen strekt zich uit tot
                    bedrijven uit een breed scala van industrieën. Met meer dan 40.000 voertuigen in ons netwerk en ons
                    grote servicebereik staan wij sterk in de regio, maar kunnen wij ook afgelegen gebieden optimaal
                    bedienen. Elke maand zorgt onze koeriersdienst ervoor dat meer dan 3.500 dringende artikelen bij de
                    ontvanger worden afgeleverd.</p>
            </div>
            <div class="text-gray-800">

                <p class="mt-20 text-gray-800 font-semibold lg:text-2xl text-xl">Huur een expediteur in — Vrachtwagen transport — Gedeeltelijke
                    lading (LTL)</p>
                <p class="mt-8">De expediteur heeft het loodje gelegd, maar de goederen en waren moeten dringend worden
                    verzonden? Geen probleem, als ervaren vrachtwagenvervoerder op het gebied van logistiek kunnen wij
                    de dag redden! Een expeditie bestellen is bij ons kinderspel. Gewoon online de kosten berekenen, de
                    verzendgegevens invoeren en binnen enkele minuten het expeditiebedrijf bestellen.</p>
                <p class="mt-6">Wij zijn dagelijks in heel Europa onderweg met onze internationale transporten in de
                    sectoren Full Truck Load en Less Than Truck Load en brengen uw lading veilig, betrouwbaar en
                    punctueel naar de gewenste bestemming. Industrieterrein, haven of depot, met ons als
                    expeditiebedrijf komt uw vracht gegarandeerd op het geplande tijdstip aan, desgewenst ook per
                    sneltransport. Wanneer u ons inhuurt als expediteur voor uw expeditiezending, is ons allround
                    ontzorgingspakket altijd inbegrepen. Dit betekent dat wij alles uit handen nemen en u geen kopzorgen
                    meer heeft. Huur ons expeditiebedrijf in om zendingen zoals pallets snel en veilig internationaal te
                    versturen. U hoeft niet vele expeditiebedrijven af te speuren naar offertes, maar bestelt bij ons
                    moeiteloos en tegen een vaste prijs online. Dankzij onze shipment tracking weet u altijd waar uw
                    goederen zich bevinden. Zo heeft u een zorgeloze verzending van zendingen en weet u altijd wanneer
                    de levering plaatsvindt.</p>
                <p class="mt-6">Onze klanten komen uit de meest uiteenlopende branches, maar vooral uit de machinebouw,
                    automotive, staal- en elektrotechniek. Voor hen vervoeren wij betrouwbaar volle ladingen naar het
                    gewenste adres. Indien nodig is het ook mogelijk om meerdere ophaal- en afleveradressen te kiezen.
                    Bij de berekening van de expeditiekosten hoeft u in onze prijscalculator alleen maar ophaal- of
                    afleveradressen toe te voegen. Bij vragen over uw vrachtwagentransport staat ons competente team
                    altijd voor u klaar.</p>
                <p class="mt-6">Wij staan voor overtuigende diensten in de logistiek - snel, veilig en op tijd! Boek nu
                    uw volgende transport via zipmend Express.</p>
            </div>
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


                    <div id="default-carousel" class="relative" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>

                                <p class="absolute top-12 left-20   text-black  -translate-y-1/2 sm:text-lg dark:text-gray-800">
                                    Google beoordeling</p>
                                <p class="absolute top-28 left-20  -translate-y-1/2 text-black  sm:text-lg dark:text-gray-800">
                                    Prima ervaring, snelle reactie. Maar maxmaal kan maar 1200kg vervoeren. Hoop om de keuze
                                    van grote vrachtwagens te vergroten.</p>

                                <div class="w-80  top-1/2 left-1/2  text-black -translate-x-1/2 -translate-y-1/2 dark:text-gray-800 absolute ">
                                    
                                </div>
                                <p class="absolute top-60 left-20   text-black  -translate-y-1/2 sm:text-lg dark:text-gray-800">
                                    Annechien T.</p>

                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>

                                <p class="absolute top-12 left-20   text-black  -translate-y-1/2 sm:text-lg dark:text-gray-800">
                                    Google beoordeling</p>
                                <p class="absolute top-28 left-20  -translate-y-1/2 text-black  sm:text-lg dark:text-gray-800">
                                    Prima ervaring, snelle reactie. Maar maxmaal kan maar 1200kg vervoeren. Hoop om de keuze
                                    van grote vrachtwagens te vergroten.</p>

                                <div class="w-80  top-1/2 left-1/2  text-black -translate-x-1/2 -translate-y-1/2 dark:text-gray-800 absolute ">
                                    
                                </div>
                                <p class="absolute top-60 left-20   text-black  -translate-y-1/2 sm:text-lg dark:text-gray-800">
                                    Annechien T.</p>
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>

                                <p class="absolute top-12 left-20   text-black  -translate-y-1/2 sm:text-lg dark:text-gray-800">
                                    Google beoordeling</p>
                                <p class="absolute top-28 left-20  -translate-y-1/2 text-black  sm:text-lg dark:text-gray-800">
                                    Prima ervaring, snelle reactie. Maar maxmaal kan maar 1200kg vervoeren. Hoop om de keuze
                                    van grote vrachtwagens te vergroten.</p>

                                <div class="w-80  top-1/2 left-1/2  text-black -translate-x-1/2 -translate-y-1/2 dark:text-gray-800 absolute ">
                                    
                                </div>
                                <p class="absolute top-60 left-20   text-black  -translate-y-1/2 sm:text-lg dark:text-gray-800">
                                    Annechien T.</p>
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                                <span class="hidden">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                                <span class="hidden">Next</span>
                            </span>
                        </button>
                    </div>
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
