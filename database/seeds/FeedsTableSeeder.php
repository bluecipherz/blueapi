<?php

use Illuminate\Database\Seeder;

class FeedsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('feeds')->delete();
		
		App\Feeds::create(['user_id'=>2,'source_id'=>3,'type'=>'WORKED','source_type'=>'PROJECT','description' => 'This Project is cool']);
		App\Feeds::create(['user_id'=>3,'source_id'=>2,'type'=>'WORKING','source_type'=>'PROJECT','description' => 'This Project is cool']);
		
	}

}
