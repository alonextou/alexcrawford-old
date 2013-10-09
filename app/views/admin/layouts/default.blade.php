<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Alex Crawford</title>
		<link rel="stylesheet" href="{{ URL::asset('css/global.css') }}">
		<script src="{{ Url::asset('js/libs/modernizr.js') }}"></script>
	</head>
	<body>

		<div id="top" class="sticky">
			<nav class="top-bar">
				<ul class="title-area">
					<li class="name">
						<h1><a href="{{ URL::to('/') }}">Frontend</a></h1>
					</li>
					<li class="toggle-topbar menu-icon"><a href=""><span></span></a></li>
				</ul>
				<section class="top-bar-section">
					<ul class="left">
						<li class="divider"></li>
						<li>
							<a href="{{ URL::route('admin') }}">Admin</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="{{ URL::route('admin_articles') }}">Articles</a>
						</li>
						<li class="divider"></li>
					</ul>
					<ul class="right">
						<li class="divider hide-for-small"></li>
						<li>
							<a href="{{ URL::to('logout') }}">Logout</a>
						</li>
						<li class="divider hide-for-small"></li>
					</ul>
				</section>
			</nav>
		</div>

		<div id="main">
			<div class="row">
				@include('partials/alert')
				@yield('page')
			</div>
		</div>

		<script src="{{ URL::asset('js/global.js') }}"></script>
	</body>
</html>