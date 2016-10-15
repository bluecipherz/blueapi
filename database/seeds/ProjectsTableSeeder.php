<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('projects')->delete();
		
		// App\Projects::create(['name'=>'Ureaka Steams Project','doc_id'=>1,'status'=>'FINISHED','description' => 'This Project is based on shiffu foundations Dubai. This project is created using web based shitzu an stereo based furnitures', 'platform' => 'WEB', 'completed' => 1]);
		// App\Projects::create(['name'=>'ROLO Pos Application','doc_id'=>2,'status'=>'ACTIVE','description' => 'This Project is based on shiffu foundations Dubai. This project is created using web based shitzu an stereo based furnitures', 'platform' => 'WEB', 'completed' => 0]);
		// App\Projects::create(['name'=>'Clamio Lexa Web App','doc_id'=>3,'status'=>'ACTIVE','description' => 'This Project is based on shiffu foundations Dubai. This project is created using web based shitzu an stereo based furnitures', 'platform' => 'WEB', 'completed' => 0]);
		
	}

}
