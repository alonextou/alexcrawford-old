<?php

class AuthController extends BaseController {

	public function getLogin()
	{
		return View::make('login');
	}

	public function postLogin()
	{
		$input = Input::all();

		$rules = [
			'username' => 'required',
			'password' => 'required|alpha_dash'
		];

		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return Redirect::back()
				->withErrors($validator)
				->withInput(Input::except('password'));
		}

		$remember = isset($input['remember-me']) ? true : false;

		if (!Auth::attempt(['username' => $input['username'], 'password' => $input['password']], $remember)
			&& !Auth::attempt(['email' => $input['username'], 'password' => $input['password']], $remember)) {
			return Redirect::back()
				->with('alert', ['alert', 'Email address, username, or password is incorrect'])
				->withInput(Input::except('password'));
		} else {
			return Redirect::intended('/')
				->with('alert', ['success', 'Welcome back!']);
		}
	}

	public function getLogout()
	{
		Auth::logout();
		Session::flash('alert', ['success', 'Please come again.']);
		return Redirect::route('home');
	}

}