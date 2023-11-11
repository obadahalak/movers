@extends('movers.layout')

@section('content')

<div class="page-wrapper">

    <!-- Header Main Area -->
    <header class="site-header header-style-6">
    
    
			@include('movers.header.navbar')
    </header>
    @include('movers.faq.titleBar')

    <div class="page-content section-faq">
        @include('movers.faq.section')
        @include('movers.faq.sectionLgb')
    </div>

</div>

@endsection