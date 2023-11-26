
<div class="{{ Request::route()->getPrefix() !="/page" ? "pbmit-header-overlay" :"" }} ">
    

    <nav class="m-4 rounded-lg bg-white shadow-md flex flex-wrap justify-between items-center lg:py-0 py-2">
        <div class="p-6 flex-1 flex justify-between ">
            <a href="index.html">
                <img class="logo-img w-40 " src="https://tijgersservices.nl/movers/images/homepage-6/-logo.png" alt="">
            </a>
        </div>
        <label for="menu-toggle" class="cursor-pointer lg:hidden block mr-4">
            <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>


        <input class="hidden" type="checkbox" id="menu-toggle" />


        <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
            <nav>
                <ul class="text-xl text-center items-center gap-x-5 md:gap-x-4 lg:text-lg lg:flex  lg:pt-0" style="color: ffdc39">
                    <li  class=" py-2 lg:py-0  ml-2 {{ Route::currentRouteName()=="home" ? "text-deepPink" : "text-gray-800" }} ">
                        <a  href="{{route('home')}}">
                         Home
                        </a>
                    </li>
                    <li class="py-2 lg:py-0  ml-2 {{ Route::currentRouteName()=="ourTeam" ? "text-deepPink" : "text-gray-800" }} " >
                        <a  href="{{route('ourTeam')}}">
                            ourTeam
                        </a>
                    </li>
                    <li class="py-2 lg:py-0  ml-2 {{ Route::currentRouteName()=="vrachtvervoerder-inhuren" ? "text-deepPink" : "text-gray-800" }} ">
                        <a class=" " href="{{route('vrachtvervoerder-inhuren')}}">
                            vrachtvervoerder-inhuren
                        </a>
                    </li>
                    <li class="py-2 lg:py-0 ml-2 {{ Route::currentRouteName()=="recensies-klanten" ? "text-deepPink" : "text-gray-800" }}">
                        <a class=" " href="{{route('recensies-klanten')}}">
                            recensies-klanten
                        </a>
                    </li>
                 
                  
                    <li class="pbmit-social-li pbmit-social-facebook text-gray-500">
                        <a href="#" target="_blank">
                            <span><i class="pbmit-base-icon-facebook"></i></span>
                        </a>
                    </li>
                    <li class="pbmit-social-li pbmit-social-twitter text-gray-500">
                        <a href="#" target="_blank">
                            <span><i class="pbmit-base-icon-twitter"></i></span>
                        </a>
                    </li>
                    <li class="pbmit-social-instagram lg:mr-2 md:mr-2 text-gray-500">
                        <a class=" tooltip-top" target="_blank" href="#">
                            <i class="pbmit-base-icon-instagram"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>