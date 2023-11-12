@extends('movers.layout')

@section('content')


<div class="page-wrapper">

    <header class="site-header header-style-6">
    
    
			@include('movers.header.navbar')
    </header>

    <div class="page-content"> 
            @include('movers.contacts.mapSection')

            <section>
				<div class="container"> 
					<div class="contact-box"> 
                         @include('movers.contacts.info')
                    </div>
                    @include('movers.contacts.sendMessage')
                </div>

            </section>    
    </div>
</div>
@endsection