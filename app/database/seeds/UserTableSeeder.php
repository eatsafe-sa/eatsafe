<?php

class UserTableSeeder extends Seeder {

	public function run() {
		DB::table('users')->delete();

		$user = new User();
		$user->email = 'tflatt74@gmail.com';
		$user->password = 'password';
		$user->is_admin = true;
		$user->save();

		$user2 = new User();
		$user2->email = 'guest@guest.com';
		$user2->password = 'guest';
		$user2->is_admin = false;
		$user2->save();

		$user3 = new User();
		$user3->email = 'mamoren1@gmail.com';
		$user3->password = 'password';
		$user3->is_admin = true;
		$user3->save();

		$user4 = new User();
		$user4->email = 'christopher.reyna@yahoo.com';
		$user4->password = 'password';
		$user4->is_admin = true;
		$user4->save();
	}
}