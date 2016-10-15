<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('comments')->delete();
		
		App\Comments::create(['user_id'=>5,'comment'=>'Wow','feed_id'=>1]);
		App\Comments::create(['user_id'=>6,'comment'=>'Keep the great work dude','feed_id'=>1]);
		
	}

}
