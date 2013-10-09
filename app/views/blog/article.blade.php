@extends('layouts/default')

@section('page')
<div id="article" class="large-12 columns">
	<div id="actions" class="panel text-right">
		<a class="pull-left" href="{{ URL::route('home') }}"><i class="icon-home"></i> Home</a>
		<a href="{{ URL::route('blog') }}"><i class="icon-arrow-left"></i> Blog</a>
	</div>
	<h5><i class="icon-arrow-right"></i>{{ $blog['title'] }}</h5>

	<img src="{{ $blog['image'] }}" width="200" class="intro pull-right">

	<p>{{ $blog['intro'] }}</p>

	{{ $blog['content'] }}
</div>
@stop