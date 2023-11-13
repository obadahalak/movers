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
                                                <a href="{{ route("home") }}">Home</a>
                                                <ul>
                                                    <li class="active"><a href="index.html">Homepage 1</a></li>
                                                    <li><a href="homepage-2.html">Homepage 2</a></li>
                                                    <li><a href="homepage-3.html">Homepage 3</a></li>
                                                    <li><a href="homepage-4.html">Homepage 4</a></li>
                                                    <li><a href="homepage-5.html">Homepage 5</a></li>
                                                    <li><a href="homepage-6.html">Homepage 6</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Pages</a>
                                                <ul>
                                                    <li ><a href="{{ route("aboutUs") }}">About us</a></li>
                                                    <li><a href="{{ route("ourTeam") }}">Our Team</a></li>
                                                    <li><a href="{{ route("teamDetails") }}">Team details</a></li>
                                                    <li><a href="{{ route("faq") }}">Faq</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Projects</a>
                                                <ul>
                                                    <li><a href="projects-style-1.html">Projects Style 1</a></li>
                                                    <li><a href="projects-style-2.html">Projects Style 2</a></li>
                                                    <li><a href="projects-style-3.html">Projects Style 3</a></li>
                                                    <li><a href="projects-single.html">Projects Single</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="services.html">Services</a>
                                                <ul>
                                                    <li><a href="services-details.html">Services Detail</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog-large-image.html">Blog Large Image</a></li>
                                                    <li><a href="blog-grid-view.html">Blog  Grid view</a></li>
                                                    <li><a href="blog-single-view.html">Blog Single View</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contacts.html">Contacts</a></li>
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