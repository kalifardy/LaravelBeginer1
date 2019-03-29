<!DOCTYPE html>
<html>
<head>
	<title>Tamplate Blade</title>
</head>
<body>

	@include('layout.header')

		@yield('content')

	@include('layout.footer')

</body>
</html>