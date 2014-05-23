<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'email' => 'stephan-v@hotmail.com',
			'password' => Hash::make('carrot123'),
			'confirmed' => 1
		]);
	}

}