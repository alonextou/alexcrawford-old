@extends('layouts/blank')

@section('page')
	<ul data-orbit data-options="bullets: false;">
		<li>
			<img src="{{ URL::asset('img/slide/card.png') }}" />
		</li>
		<li>
			<img src="{{ URL::asset('img/slide/van1.jpg') }}" />
		</li>
		<li>
			<img src="{{ URL::asset('img/slide/van2.jpg') }}" />
		</li>
	</ul>
@stop