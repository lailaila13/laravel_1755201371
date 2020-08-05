<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<script src="{{asset('js/app.js') }}"></script>\
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
</head>
<body>
	@include('layouts.navbar')
	<div class="container-fluid">

		<div class="row mt-1">
			<div class="col-md-2">
				@include('layouts.sidebar')
			</div>

			<div class="col-md-10">
				@include('layouts.breadcrumd')
				@yield('content')
			</div>
		</div>
	</div>
</body>
</html>