@extends('layouts/default')

@section('page')
<div id="article" class="small-12 columns">
	<div id="actions" class="panel text-right">
		<a class="pull-left" href="{{ URL::route('home') }}"><i class="icon-home"></i> Home</a>
		<a href="{{ URL::route('blog') }}"><i class="icon-arrow-left"></i> Blog</a>
	</div>

	<h5><i class="icon-arrow-right"></i>{{ $blog['title'] }}</h5>

	<div class="row">
		<div class="small-12 medium-3 columns">

			<img src="{{ $blog['image'] }}" class="intro hide-for-small">

			<div class="twitter hide-for-small">
				@include('partials/twitter')
			</div>

			<div class="row show-for-small">
				<div class="small-4 columns">
					<img src="{{ $blog['image'] }}" class="intro">
				</div>
				<div class="small-8 columns">
					<p>{{ $blog['intro'] }}</p>
				</div>
			</div>
		</div>

		<div class="small-12 medium-9 columns">
			<div class="hide-for-small"><p>{{ $blog['intro'] }}</p></div>
			{{ $blog['content'] }}
		</div>
	</div>

	
</div>
@stop