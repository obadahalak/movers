@extends('movers.layout')

@section('content')

      <!-- page wrapper -->
      <div class="page-wrapper">

		<!-- Header Main Area -->
		<header class="site-header header-style-6">
                  @include('movers.header.navbar')
            </header>

        @include('movers.our-team.titleBar')
        @include('movers.our-team.pageContent')
      </div>

@endsection