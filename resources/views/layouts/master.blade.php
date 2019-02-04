<!DOCTYPE html>
<html>
<head>
	<title>@include('partials.titles')</title>
	@include('partials.styles')
</head>
<body>
	<div class="container" style="background-color: #cacaca;">
	@include('partials.head')
	<div class="wrapper">
	     @include('partials.nav')
		 @yield('content')
	     @include('partials.footer')
 	</div>
     @include('partials.scripts')
 	</div>

</body>
</html>