<div class="large-12 columns">
	@if (Session::has('alert'))
		<div data-alert class="alert-box {{ Session::get('alert')[0] }}">
			{{ Session::get('alert')[1] }}
			<a href="#" class="close"><i class="icon-remove"></i></a>
		</div>
	@endif
</div>