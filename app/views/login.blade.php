@extends('layouts/default')

@section('page')
<div class="large-12 columns">
	<h5>Login</h5>
	{{ Form::open(['route' => 'login', 'method' => 'post', 'id' => 'login-form']) }}
		<div class="row">
			<div class="medium-6 push-3 columns">
				<input name="username" type="text" placeholder="Username or email address" value="{{ Input::old('username') }}" required>
				<input name="password" type="password" placeholder="Password" required>
				<button type="submit" class="large-12 success">Login</button>
			</div>
		</div>
	{{ Form::close() }}
</div>
@stop