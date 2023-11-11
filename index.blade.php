@extends('movers.layout')

@section('content')

      <!-- page wrapper -->
   <div class="page-wrapper">

		<!-- Header Main Area -->
		<header class="site-header header-style-6">
			
			@include('movers.header.navbar')

			@include('movers.header.slide')
			
		
		</header>
		<!-- Header Main Area End Here -->

		<!-- Page Content -->
		<div class="page-content demo-six">

			<!-- Icon Box Start--> 
			@include('movers.header.boxs')
			<!-- Icon Box End -->  

			<!-- About Start--> 
			@include('movers.home.chooseUs')

			<!-- About End --> 

			<!-- Counter Start --> 
			@include('movers.home.counter')
			<!-- Counter End -->

			<!-- Service Start --> 
			@include('movers.home.service')
			<!-- Service End -->

			<!-- Progressbar Start -->
			@include('movers.home.progressSection')
			<!-- Progressbar End -->  

			<!-- Team Start -->
			@include('movers.home.teamSection')
			<!-- Team End -->

			<!-- Client Start -->
			@include('movers.home.clientSection')
			<!-- Client End -->

			<!-- Testimonial Start --> 
				{{--  @include('movers.home.testimonial')  --}}
			<!-- Testimonial End -->

			<!-- Blog Start -->
			{{--  @include('movers.home.latestNews')  --}}
			<!-- Blog End -->

		</div>
		<!-- Page Content End -->

	@endsection   
