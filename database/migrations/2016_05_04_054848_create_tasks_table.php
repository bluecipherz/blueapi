<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
			$table->integer('parent_id'); 
			$table->integer('project_id'); 
            $table->string('description');
			$table->integer('duration'); 
			$table->integer('progress'); 
			$table->integer('priority'); 
			$table->integer('level'); 
			$table->integer('assigned_to'); 
            $table->string('start_date');
            $table->string('finish_date');
            $table->string('type');
            $table->string('status');
			$table->integer('completed'); 
			$table->timestamps(); 
		});

		Schema::create('taskbags', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
			$table->integer('parent_id'); 
			$table->integer('project_id');
			$table->integer('level');
            $table->string('type'); 
			$table->timestamps(); 
		});
	} 
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasks');
		Schema::drop('taskbags');
	}

}
