@extends('movers.layout')

@section('css')

<script src="https://cdn.tailwindcss.com"></script>

<link href="{{ asset('output.css') }}" rel="stylesheet">


@endsection

@section('content')

<!--shahd -->
<header class="site-header header-style-6">


    @include('movers.header.topNavbar')
</header>

<div class="container  mx-auto">
    <div class="mt-6">
        <p class="text-gray-800 font-semibold lg:text-2xl text-xl">Koeriersvoertuigen</p>
    </div>

    {{-- table --}}
    <div class=" mb-8 mt-6 w-100 overflow-x-scroll">

        <table class="mx-auto table-fixed  ">
            <thead>
                <tr class="">
                    <th class="lg:p-8 p-4 ">

                    </th>
                    <th class="lg:p-8 p-4 text-sm text-gray-800 font-medium text-center ">
                        <img class="object-cover w-60 mx-auto"
                            src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                            alt="">
                        <p class="font-semibold lg:text-xl text-lg  mb-3">Kleine bestelwagen</p>
                        <p>160 x 120 x 120 cm</p>
                        <p>max. 400 kg</p>
                        <p>max. 2 pallets</p>
                    </th>
                    <th class="lg:p-8 p-4 text-sm text-gray-800 text-center font-medium  ">
                        <img class="object-cover w-60 mx-auto"
                            src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                            alt="">
                        <p class="font-semibold lg:text-xl text-lg  mb-3">Kleine bestelwagen</p>
                        <p>160 x 120 x 120 cm</p>
                        <p>max. 400 kg</p>
                        <p>max. 2 pallets</p>
                    </th>
                    <th class="lg:p-8 p-4 text-sm text-gray-800 text-center font-medium ">
                        <img class="object-cover w-60 mx-auto"
                            src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                            alt="">
                        <p class="font-semibold lg:text-xl text-lg  mb-3">Kleine bestelwagen</p>
                        <p>160 x 120 x 120 cm</p>
                        <p>max. 400 kg</p>
                        <p>max. 2 pallets</p>
                    </th>
                    <th class="lg:p-8 p-4 text-sm text-gray-800 text-center font-medium ">
                        <img class="object-cover w-60 mx-auto"
                            src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                            alt="">
                        <p class="font-semibold lg:text-xl text-lg mb-3">Kleine bestelwagen</p>
                        <p>160 x 120 x 120 cm</p>
                        <p>max. 400 kg</p>
                        <p>max. 2 pallets</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-100">
                    <td class="break-all px-4 text-center border-2 border-white  lg:text-lg font-semibold text-black ">Laden via de
                        achterkant</td>
                    <td class="  text-center text-red-600 border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/wrongCheck.svg')}}" type="image/svg+xml"></object>
                    </td>
                </tr>

                <tr class="bg-white">
                    <td class="px-4 text-center border-2 border-white  lg:text-lg font-semibold text-black">5t gedeeltelijke
                        lading</td>
                    <td class=" text-center text-red-600 border-2 border-white">
                      
                        <object class="mx-auto" data="{{asset('movers/wrongCheck.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                   
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class="p-2 text-center border-2 border-white">
                   
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                </tr>



            </tbody>
        </table>
    </div>
    {{-- end-table --}}

    
  {{-- table --}}
  <div class=" mb-8 mt-6 w-100 overflow-x-scroll">


    <table class="mx-auto table-fixed  ">
        <thead>
            <tr class="">
                <th class="lg:p-8 p-4 ">

                </th>
                <th class="lg:p-8 p-4 text-sm text-gray-800 font-medium text-center ">
                    <img class="object-cover w-60 mx-auto"
                        src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                        alt="">
                    <p class="font-semibold lg:text-xl text-lg  mb-3">Kleine bestelwagen</p>
                    <p>160 x 120 x 120 cm</p>
                    <p>max. 400 kg</p>
                    <p>max. 2 pallets</p>
                </th>
                <th class="lg:p-8 p-4 text-sm text-gray-800 text-center font-medium  ">
                    <img class="object-cover w-60 mx-auto"
                        src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                        alt="">
                    <p class="font-semibold lg:text-xl text-lg  mb-3">Kleine bestelwagen</p>
                    <p>160 x 120 x 120 cm</p>
                    <p>max. 400 kg</p>
                    <p>max. 2 pallets</p>
                </th>
                <th class="lg:p-8 p-4 text-sm text-gray-800 text-center font-medium ">
                    <img class="object-cover w-60 mx-auto"
                        src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                        alt="">
                    <p class="font-semibold lg:text-xl text-lg  mb-3">Kleine bestelwagen</p>
                    <p>160 x 120 x 120 cm</p>
                    <p>max. 400 kg</p>
                    <p>max. 2 pallets</p>
                </th>
                <th class="lg:p-8 p-4 text-sm text-gray-800 text-center font-medium ">
                    <img class="object-cover w-60 mx-auto"
                        src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                        alt="">
                    <p class="font-semibold lg:text-xl text-lg mb-3">Kleine bestelwagen</p>
                    <p>160 x 120 x 120 cm</p>
                    <p>max. 400 kg</p>
                    <p>max. 2 pallets</p>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-gray-100">
                <td class="break-all px-4 text-center border-2 border-white  lg:text-lg font-semibold text-black ">Laden via de
                    achterkant</td>
                <td class="  text-center text-red-600 border-2 border-white">
                    <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                </td>
                <td class=" text-center border-2 border-white">
                    <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                </td>
                <td class=" text-center border-2 border-white">
                    <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                </td>
                <td class=" text-center border-2 border-white">
                    <object class="mx-auto" data="{{asset('movers/wrongCheck.svg')}}" type="image/svg+xml"></object>
                </td>
            </tr>

            <tr class="bg-white">
                <td class="px-4 text-center border-2 border-white  lg:text-lg font-semibold text-black">5t gedeeltelijke
                    lading</td>
                <td class=" text-center text-red-600 border-2 border-white">
                  
                    <object class="mx-auto" data="{{asset('movers/wrongCheck.svg')}}" type="image/svg+xml"></object>
                </td>
                <td class=" text-center border-2 border-white">
                    <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                </td>
                <td class=" text-center border-2 border-white">
               
                    <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                </td>
                <td class="p-2 text-center border-2 border-white">
               
                    <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                </td>
            </tr>



        </tbody>
    </table>
</div>
{{-- end-table --}}

    {{-- table --}}
    <div class=" mb-8 mt-6 w-100 overflow-x-scroll">


        <table class="mx-auto table-fixed  ">
            <thead>
                <tr class="">
                    <th class="lg:p-8 p-4 ">

                    </th>
                    <th class="lg:p-8 p-4 text-sm text-gray-800 font-medium text-center ">
                        <img class="object-cover w-60 mx-auto"
                            src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                            alt="">
                        <p class="font-semibold lg:text-xl text-lg  mb-3">Kleine bestelwagen</p>
                        <p>160 x 120 x 120 cm</p>
                        <p>max. 400 kg</p>
                        <p>max. 2 pallets</p>
                    </th>
                    <th class="lg:p-8 p-4 text-sm text-gray-800 text-center font-medium  ">
                        <img class="object-cover w-60 mx-auto"
                            src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                            alt="">
                        <p class="font-semibold lg:text-xl text-lg  mb-3">Kleine bestelwagen</p>
                        <p>160 x 120 x 120 cm</p>
                        <p>max. 400 kg</p>
                        <p>max. 2 pallets</p>
                    </th>
                    <th class="lg:p-8 p-4 text-sm text-gray-800 text-center font-medium ">
                        <img class="object-cover w-60 mx-auto"
                            src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                            alt="">
                        <p class="font-semibold lg:text-xl text-lg  mb-3">Kleine bestelwagen</p>
                        <p>160 x 120 x 120 cm</p>
                        <p>max. 400 kg</p>
                        <p>max. 2 pallets</p>
                    </th>
                    <th class="lg:p-8 p-4 text-sm text-gray-800 text-center font-medium ">
                        <img class="object-cover w-60 mx-auto"
                            src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                            alt="">
                        <p class="font-semibold lg:text-xl text-lg mb-3">Kleine bestelwagen</p>
                        <p>160 x 120 x 120 cm</p>
                        <p>max. 400 kg</p>
                        <p>max. 2 pallets</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-100">
                    <td class="break-all px-4 text-center border-2 border-white  lg:text-lg font-semibold text-black ">Laden via de
                        achterkant</td>
                    <td class="  text-center text-red-600 border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/wrongCheck.svg')}}" type="image/svg+xml"></object>
                    </td>
                </tr>

                <tr class="bg-white">
                    <td class="px-4 text-center border-2 border-white  lg:text-lg font-semibold text-black">5t gedeeltelijke
                        lading</td>
                    <td class=" text-center text-red-600 border-2 border-white">
                      
                        <object class="mx-auto" data="{{asset('movers/wrongCheck.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                   
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class="p-2 text-center border-2 border-white">
                   
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                </tr>



            </tbody>
        </table>
    </div>
    {{-- end-table --}}

    {{-- table --}}
    <div class=" mb-8 mt-6 w-100 overflow-x-scroll">


        <table class="mx-auto table-fixed  ">
            <thead>
                <tr class="">
                    <th class="lg:p-8 p-4 ">

                    </th>
                    <th class="lg:p-8 p-4 text-sm text-gray-800 font-medium text-center ">
                        <img class="object-cover w-60 mx-auto"
                            src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                            alt="">
                        <p class="font-semibold lg:text-xl text-lg  mb-3">Kleine bestelwagen</p>
                        <p>160 x 120 x 120 cm</p>
                        <p>max. 400 kg</p>
                        <p>max. 2 pallets</p>
                    </th>
                    <th class="lg:p-8 p-4 text-sm text-gray-800 text-center font-medium  ">
                        <img class="object-cover w-60 mx-auto"
                            src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                            alt="">
                        <p class="font-semibold lg:text-xl text-lg  mb-3">Kleine bestelwagen</p>
                        <p>160 x 120 x 120 cm</p>
                        <p>max. 400 kg</p>
                        <p>max. 2 pallets</p>
                    </th>
                    <th class="lg:p-8 p-4 text-sm text-gray-800 text-center font-medium ">
                        <img class="object-cover w-60 mx-auto"
                            src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                            alt="">
                        <p class="font-semibold lg:text-xl text-lg  mb-3">Kleine bestelwagen</p>
                        <p>160 x 120 x 120 cm</p>
                        <p>max. 400 kg</p>
                        <p>max. 2 pallets</p>
                    </th>
                    <th class="lg:p-8 p-4 text-sm text-gray-800 text-center font-medium ">
                        <img class="object-cover w-60 mx-auto"
                            src="https://zipmend.com/wp-content/uploads/2022/08/zipmend-Koeriers-voertuig-Kleine-bestelwagen.png"
                            alt="">
                        <p class="font-semibold lg:text-xl text-lg mb-3">Kleine bestelwagen</p>
                        <p>160 x 120 x 120 cm</p>
                        <p>max. 400 kg</p>
                        <p>max. 2 pallets</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-100">
                    <td class="break-all px-4 text-center border-2 border-white  lg:text-lg font-semibold text-black ">Laden via de
                        achterkant</td>
                    <td class="  text-center text-red-600 border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/wrongCheck.svg')}}" type="image/svg+xml"></object>
                    </td>
                </tr>

                <tr class="bg-white">
                    <td class="px-4 text-center border-2 border-white  lg:text-lg font-semibold text-black">5t gedeeltelijke
                        lading</td>
                    <td class=" text-center text-red-600 border-2 border-white">
                      
                        <object class="mx-auto" data="{{asset('movers/wrongCheck.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class=" text-center border-2 border-white">
                   
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                    <td class="p-2 text-center border-2 border-white">
                   
                        <object class="mx-auto" data="{{asset('movers/check.svg')}}" type="image/svg+xml"></object>
                    </td>
                </tr>



            </tbody>
        </table>
    </div>
    {{-- end-table --}}


    {{--  --}}
{{-- bottom --}}freight forwarders

    <div class="mt-4 mb-8 w-full flex">
        <button class="mx-auto mt-8 lg:text-xl text-white font-semibold  bg-deep2Pink lg:p-3  p-2 lg:text-center text-start rounded-md hover:shadow-lg">Bereken
            Bereken prijs en boek direct
        </button>

    </div>
</div>

@endsection