@extends('movers.layout')

@section('content')

      <!-- page wrapper -->
   <div class="page-wrapper">

		<!-- Header Main Area -->
		<header class="site-header header-style-6">
            @include('movers.header.navbar')	
        </header>
        @include('movers.services.titleBar')
    </div>


    <div class="page-content">
        <section class="section-md">
        
            @include('movers.services.section')
        </section>   
    </div>
   </div>

   @endsection