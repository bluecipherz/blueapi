<?php

use Illuminate\Database\Seeder;

class TaskAndTaskbagTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('tasks')->delete();
		DB::table('taskbags')->delete();


		// App\Taskbag::create(['name'=>'Iam the Bag','parent_id'=>0,'project_id'=>1,'type'=>'taskbag','level'=>0]);
		
		// App\Task::create(['name'=>'Cool Name','parent_id'=>0,'level'=>0,'project_id'=>1,'description' => 'Awesome', 'duration' => 3, 'completed' => 0,'priority'=>1,'progress'=>15,'assigned_to'=>3,'start_date'=>'Fri May 06 2016 01:19:19 GMT+0530 (India Standard Time)','finish_date'=>'Fri May 06 2016 01:19:19 GMT+0530 (India Standard Time)','type'=>'task','status'=>'INACTIVE']);
		// // App\Task::create(['name'=>'Shitcool','parent_id'=>0,'level'=>0,'project_id'=>1,'description' => 'Awesome', 'duration' => 3, 'completed' => 0,'priority'=>1,'progress'=>15,'assigned_to'=>3,'start_date'=>'Fri May 06 2016 01:19:19 GMT+0530 (India Standard Time)','finish_date'=>'Fri May 06 2016 01:19:19 GMT+0530 (India Standard Time)','type'=>'task','status'=>'INACTIVE']);
		// // App\Task::create(['name'=>'Cenoy','parent_id'=>0,'level'=>0,'project_id'=>1,'description' => 'Awesome', 'duration' => 3, 'completed' => 0,'priority'=>1,'progress'=>15,'assigned_to'=>3,'start_date'=>'Fri May 06 2016 01:19:19 GMT+0530 (India Standard Time)','finish_date'=>'Fri May 06 2016 01:19:19 GMT+0530 (India Standard Time)','type'=>'task','status'=>'INACTIVE']);
		// // App\Task::create(['name'=>'Freksh','parent_id'=>1,'level'=>1,'project_id'=>1,'description' => 'Awesome', 'duration' => 3, 'completed' => 0,'priority'=>1,'progress'=>15,'assigned_to'=>3,'start_date'=>'Fri May 06 2016 01:19:19 GMT+0530 (India Standard Time)','finish_date'=>'Fri May 06 2016 01:19:19 GMT+0530 (India Standard Time)','type'=>'task','status'=>'INACTIVE']);
		// App\Task::create(['name'=>'Clamilakxin','parent_id'=>1,'level'=>1,'project_id'=>1,'description' => 'Awesome', 'duration' => 3, 'completed' => 0,'priority'=>1,'progress'=>15,'assigned_to'=>3,'start_date'=>'Fri May 06 2016 01:19:19 GMT+0530 (India Standard Time)','finish_date'=>'Fri May 06 2016 01:19:19 GMT+0530 (India Standard Time)','type'=>'task','status'=>'INACTIVE']);
   
	}

}
