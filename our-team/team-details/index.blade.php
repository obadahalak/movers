@extends('movers.layout')

@section('content')

<div class="page-wrapper">

    <!-- Header Main Area -->
    <header class="site-header header-style-6">
        
        @include('movers.header.navbar')
    </header>

    @include('movers.our-team.team-details.titleBar')

    <div class="page-content">
        <section class="pbmit-team-detail-single">
            
            
        @include('movers.our-team.team-details.details')
        @include('movers.our-team.team-details.wrap')
        @include('movers.our-team.team-details.progress')
        @include('movers.our-team.team-details.contact')
        </section>
    </div>

</div>

@endsection