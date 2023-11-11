@extends('movers.layout')

@section('content')

<div class="page-wrapper">

    <header class="site-header header-style-6">
    
    
			@include('movers.header.navbar')
    </header>
  
    @include('movers.aboutUs.titleBar')

    <div class="page-content">
        
        <section class="section-md">
          @include('movers.aboutUs.section')
        </section>
        
			<section class="about-counters-numbers">    
                @include('movers.aboutUs.counterNumbers')
            </section>
            <section class="video-section-one">
                
                @include('movers.aboutUs.testimonial')
            </section>

            <!-- Team Start -->

            <section class="team-section-one team-bg-color">
                
                @include('movers.aboutUs.our-team')
            </section>
    </div>
</div>

@endsection