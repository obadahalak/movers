<!DOCTYPE html  >
    <head>
      <style> #menu-toggle:checked+#menu {
             display: block;
         }
      </style>
      <script src="https://cdn.tailwindcss.com"></script>

   <link href="{{ asset('/movers/css/output.css') }}" rel="stylesheet">
     @yield('css')
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MoversCO – Movers, Relocation, Transport & Packers HTML Template</title>
        <meta name="robots" content="noindex, follow">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- CSS
           ============================================ -->
        <!-- Bootstrap CSS -->
        
        <link rel="stylesheet" href="{{asset("/movers/css/bootstrap.min.css")}}">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="{{asset("/movers/css/fontawesome.css")}}">
        <!-- Flaticon -->
        <link rel="stylesheet" href="{{asset("/movers/css/flaticon.css")}}">
        <!-- Base Icons -->
        <link rel="stylesheet" href="{{asset("/movers/css/pbminfotech-base-icons.css")}}"> 
        <!-- AOS -->
        <link rel="stylesheet" href="{{asset("/movers/css/aos.css")}}">
        <!-- Swiper -->
        <link rel="stylesheet" href="{{asset("/movers/css/swiper.min.css")}}">
        <!-- Magnific -->
        <link rel="stylesheet" href="{{asset("/movers/css/magnific-popup.css")}}"> 
        <!-- Shortcode CSS -->
        <link rel="stylesheet" href="{{asset("/movers/css/shortcode.css")}}">
        <!-- Themify Icons -->
        <link rel="stylesheet" href="{{asset("/movers/css/themify-icons.css")}}">
        <!-- Demo Base CSS -->
        <link rel="stylesheet" href="{{asset("/movers/css/demo-2.css")}}">
        <!-- Base CSS -->
        <link rel="stylesheet" href="{{asset("/movers/css/base.css")}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset("/movers/css/style.css")}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset("/movers/css/responsive.css")}}">
        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="{{asset("/movers/revolution/rs6.css")}}">
       
     </head>
<body>
    @yield('content')


       <!-- JS
         ============================================ -->
      <!-- jQuery JS -->
      <script src="{{asset("/movers/js/jquery.min.js")}}"></script>
      <!-- Popper JS -->
      <script src="{{asset("/movers/js/popper.min.js")}}"></script>
      <!-- Bootstrap JS -->
      <script src="{{asset("/movers/js/bootstrap.min.js")}}"></script> 
      <!-- jquery Waypoints JS -->
      <script src="{{asset("/movers/js/jquery.waypoints.min.js")}}"></script>
      <!-- jquery Appear JS -->
      <script src="{{asset("/movers/js/jquery.appear.js")}}"></script>
      <!-- Numinate JS -->
      <script src="{{asset("/movers/js/numinate.min.js")}}"></script>
      <!-- Swiper JS -->
      <script src="{{asset("/movers/js/swiper.min.js")}}"></script>
      <!-- Magnific JS -->
      <script src="{{asset("/movers/js/jquery.magnific-popup.min.js")}}"></script>
      <!-- Circle Progress JS -->
      <script src="{{asset("/movers/js/circle-progress.js")}}"></script>  
	  <!-- AOS -->
      <script src="{{asset("/movers/js/aos.js")}}"></script>
      <!-- Scripts JS -->
      <script src="{{asset("/movers/js/scripts.js")}}"></script>      
	  <!-- Revolution JS -->
      <script src="{{asset("/movers/revolution/rslider.js")}}"></script>
      <script src="{{asset("/movers/revolution/rbtools.min.js")}}"></script>
      <script src="{{asset("/movers/revolution/rs6.min.js")}}"></script>


      <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
      @include('movers.footer.index')


    </body>
