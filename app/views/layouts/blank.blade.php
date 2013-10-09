<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Alex Crawford</title>
		<link rel="stylesheet" href="{{ URL::asset('css/global.css') }}">
		<script src="{{ Url::asset('js/libs/modernizr.js') }}"></script>
	</head>
	<body>

		<div id="blank">
			@include('partials/alert')
			@yield('page')
		</div>

		<script src="{{ URL::asset('js/global.js') }}"></script>
	</body>
</html>