<div class="pbmit-header-overlay"> 
    <div class="site-header-menu">
        <div class="container p-0">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="pbmit-header-content d-flex align-items-center">
                        <div class="site-branding">
                            <a href="index.html">
                                <img class="logo-img" src="{{asset("/movers/images/homepage-6/logo.png")}}" alt="">
                            </a>
                        </div>
                        <div class="site-navigations ml-auto">
                            <nav class="main-menu navbar-expand-xl navbar-light">
                                <div class="navbar-header">
                                    <!-- Toggle Button --> 
                                    <button class="navbar-toggler" type="button">
                                        <i class="pbmit-moversco-icon-bars"></i>
                                    </button>
                                </div>
                                <div class="pbmit-mobile-menu-bg"></div>
                                <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                    <div class="pbmit-menu-wrap">
                                        <ul class="navigation clearfix">
                                            {{--  {{ Route::currentRouteName()  }}  --}}
                                            <li class="dropdown {{ Route::currentRouteName()=="home" ? "active" : "" }}">
                                                <a href="{{ route("home") }}">{{ taal_user_pure(1065,'ned') }}</a>
                                                <ul>
                                                    <li class="active"><a href="index.html">{{ taal_user_pure(1066,'ned') }}</a></li>
                                                    <li><a href="homepage-2.html">{{ taal_user_pure(1046,'ned') }}</a></li>
                                                    <li><a href="homepage-3.html">{{ taal_user_pure(1047,'ned') }}</a></li>
                                                    <li><a href="homepage-4.html">{{ taal_user_pure(1048,'ned') }}</a></li>
                                                    <li><a href="homepage-5.html">{{ taal_user_pure(1049,'ned') }}</a></li>
                                                    <li><a href="homepage-6.html">{{ taal_user_pure(1050,'ned') }}</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Pages</a>
                                                <ul>
                                                    <li ><a href="{{ route("aboutUs") }}">{{ taal_user_pure(1051,'ned') }}</a></li>
                                                    <li><a href="{{ route("ourTeam") }}">{{ taal_user_pure(1052,'ned') }}</a></li>
                                                    <li><a href="{{ route("teamDetails") }}">{{ taal_user_pure(1053,'ned') }}</a></li>
                                                    <li><a href="{{ route("faq") }}">{{ taal_user_pure(1054,'ned') }}Faq</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">{{ taal_user_pure(1055,'ned') }}</a>
                                                <ul>
                                                    <li><a href="projects-style-1.html">{{ taal_user_pure(1056,'ned') }}</a></li>
                                                    <li><a href="projects-style-2.html">{{ taal_user_pure(1057,'ned') }}</a></li>
                                                    <li><a href="projects-style-3.html">{{ taal_user_pure(1058,'ned') }}</a></li>
                                                    <li><a href="projects-single.html">{{ taal_user_pure(1059,'ned') }}</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown {{ Route::currentRouteName()=="services" ? "active" : "" }}">
                                                <a  href="{{route("services")}}">Services</a>
                                                <ul>
                                                    <li><a href="services-details.html">{{ taal_user_pure(1060,'ned') }}</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog-large-image.html">{{ taal_user_pure(1061,'ned') }}</a></li>
                                                    <li><a href="blog-grid-view.html">{{ taal_user_pure(1062,'ned') }}</a></li>
                                                    <li><a href="blog-single-view.html">{{ taal_user_pure(1063,'ned') }}</a></li>
                                                </ul>
                                            </li>
                                            <li class="{{ Route::currentRouteName()=="contacts" ? "active" : "" }}" ><a href="{{ route("contacts") }}">{{ taal_user_pure(1064,'ned') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="pbmit-right-main-box">
                            <ul class="pbmit-social-links">
                                <li class="pbmit-social-li pbmit-social-facebook">
                                    <a href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-facebook"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-twitter">
                                    <a href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-twitter"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-instagram">
                                    <a class=" tooltip-top" target="_blank" href="#">
                                        <i class="pbmit-base-icon-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="pbmit-header-search-btn">
                                <a href="#">
                                    <i class="pbmit-base-icon-search-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>