<?php

class UserSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		$password = Hash::make('admin');
		User::create([
			'email' => 'admin@gmail.com',
        	'username' => 'admin',
        	'password' => $password
		]);
	}

}