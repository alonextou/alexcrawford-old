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
			<nav class="top-bar row">
				<ul class="title-area">
					<li class="name">
						<h1><a href="{{ URL::to('/') }}">Alex Crawford</a></h1>
					</li>
					<li class="toggle-topbar menu-icon"><a href=""><span></span></a></li>
				</ul>
				<section class="top-bar-section">
					<ul class="left">
						<li class="divider"></li>
						<li>
							<a href="{{ URL::route('blog') }}">Blog</a>
						</li>
						<li class="divider"></li>
					</ul>
					<ul class="right social">
						<li class="divider hide-for-small"></li>
						<li>
							<a href="http://twitter.com/awc737"><i class="icon-twitter icon-2x"></i></a>
						</li>
						<li class="divider show-for-small"></li>
						<li>
							<a href="http://github.com/awc737"><i class="icon-github icon-2x"></i></a>
						</li>
						<li class="divider show-for-small"></li>
						<li>
							<a href="https://coderbits.com/awc737"><i class="icon-code icon-2x"></i></a>
						</li>
					</ul>
				</section>
			</nav>
		</div>

		<div id="head">
			<div class="row">
				<div class="medium-2 small-4 columns pull-left">
					<img src="{{ URL::asset('img/me.png') }}">
				</div>
				<div class="medium-4 small-8 columns pull-right">
					<ul class="side-nav">
						<li>
							<a href="#">
								<i class="icon-phone"></i>321-759-5293
							</a>
						</li>
						<li>
							<a href="mailto:awc737@gmail.com">
								<i class="icon-envelope"></i>Contact Me
							</a>
						</li>
						<li>
							<a href="{{ URL::to('files/alexcrawford-resume-2013.pdf') }}" target="_blank">
								<i class="icon-cloud"></i>Download my Resume
							</a>
						</li>
					</ul>
				</div>
				<div class="medium-6 small-12 columns">
					<h6>Web / Application Developer</h6>
					<p>I am a problem solver and a leader. I seek challenges that require me to overcome obstacles and implement better solutions. I am passionate about my work, web standards and rapidly evolving technology.</p>
				</div>
			</div>
		</div>

		<div id="main">
			<div class="row">
				@include('partials/alert')
				@yield('page')
			</div>
		</div>

		<div id="foot">
			<div class="row">
				<div class="small-12 columns">
					<div class="icons pull-left">
						<span class="hide-for-small pull-left">Built with:</span>
						<a href="http://laravel.com/" target="_blank">
							<img src="{{ URL::asset('img/laravel.png') }}"
								data-tooltip class="has-tip tip-top" title="Laravel 4 - PHP MVC framework">
						</a>
						<a href="http://foundation.zurb.com/" target="_blank">
							<img src="https://scontent-a-pao.xx.fbcdn.net/hphotos-ash3/225360_10151257429781160_281975140_n.jpg"
								data-tooltip class="has-tip tip-top" title="Zurb Foundation 4 - CSS / JS responsive framework">
						</a>
						<a href="http://compass-style.org/" target="_blank">
							<img src="http://a0.twimg.com/profile_images/1459970796/compass-avatar.png"
								data-tooltip class="has-tip tip-top" title="Compass - Sass to CSS precompiler">
						</a>
						<a href="http://gruntjs.com/" target="_blank">
							<img src="http://static.grayghostvisuals.com/imgblog/grunt.png"
								data-tooltip class="has-tip tip-top" title="Grunt.js - automated task runner">
						</a>
					</div>
					<div class="cmd pull-right">
						<span class="hide-for-small pull-left">Employed By:</span>
						<a href="http://cmdagency.com/" target="_blank">
							<img src="{{ URL::asset('img/cmdlogo.png') }}">
						</a>
					</div>
				</div>
			</div>
		</div>

		<script src="{{ URL::asset('js/global.js') }}"></script>
	</body>
</html>