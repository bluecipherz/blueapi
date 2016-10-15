<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
		
		// $user1 = App\User::create(['name' => 'Basi', 'assigned_to' => 'Nothing' ,'position' => 'Backend Developer' ,'dp_img' => ' ' ,  'email' => 'basi@bluroe.com', 'password' => Hash::make('nevergiveup')]);
		$user2 = App\User::create(['name' => 'Hanjaz', 'assigned_to' => 'Nothing' ,'position' => 'Backend Developer' ,'dp_img' => ' ', 'email' => 'roshan@bluroe.com', 'password' => Hash::make('nevergiveup')]);
		$user3 = App\User::create(['name' => 'Anu', 'assigned_to' => 'Nothing' ,'position' => 'Javascript Developer' ,'dp_img' => ' ', 'email' => 'anu@bluroe.com', 'password' => Hash::make('nevergiveup')]);
		$user3 = App\User::create(['name' => 'Waxx', 'assigned_to' => 'Nothing' ,'position' => 'Frontend Developer' ,'dp_img' => ' ',  'email' => 'waxx@bluroe.com', 'password' => Hash::make('nevergiveup')]);
		$user3 = App\User::create(['name' => 'Shibi', 'assigned_to' => 'Nothing' ,'position' => 'Backend Developer' ,'dp_img' => ' ',  'email' => 'shibi@bluroe.com', 'password' => Hash::make('nevergiveup')]);
		$user3 = App\User::create(['name' => 'Rixx', 'assigned_to' => 'Nothing' ,'position' => 'Frontend Developer' ,'dp_img' => ' ',  'email' => 'rinoy@bluroe.com', 'password' => Hash::make('nevergiveup')]);
		
	}

}
