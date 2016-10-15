<?php

use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('reports')->delete();
		
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Hello im a shit you know?', 'user_id' => 1, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Well im a shit you know?', 'user_id' => 1, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Man im a shit you know?', 'user_id' => 2, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Go to the shit and im a shit you know?', 'user_id' => 2, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Real shit and im a shit you know?', 'user_id' => 1, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Hello im a shit you know?', 'user_id' => 3, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Well im a shit you know?', 'user_id' => 3, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Man im a shit you know?', 'user_id' => 3, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Go to the shit and im a shit you know?', 'user_id' => 4, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Real shit and im a shit you know?', 'user_id' => 4, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'THis is shit and im a shit you know?', 'user_id' => 4, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Hello im a shit you know?', 'user_id' => 5, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Well im a shit you know?', 'user_id' => 5, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Man im a shit you know?', 'user_id' => 6, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Go to the shit and im a shit you know?', 'user_id' => 6, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		App\Reports::create(['project_id'=>1,'status'=>'FINISHED','description' => 'Real shit and im a shit you know?', 'user_id' => 1, 'whf' => '12569537329', 'wht' => '12569537329','date' => '12569537329']);
		
	}

}
