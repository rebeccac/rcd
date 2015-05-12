@include('includes/dtd')
@include('includes/head')
<body>
	<div class="container-fluid">

		@include('includes/header')

		<div class="container">
			@yield('content')
		</div><!-- end of container -->
		<div class="push"></div>
	</div><!-- end of container-fluid -->
	@include('includes/footer')

</body>
</html>
