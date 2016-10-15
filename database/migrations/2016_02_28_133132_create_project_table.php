<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('platform');
			$table->string('start_date');
			$table->string('deadline');
			$table->string('finish_date');
			$table->integer('settings_id');
			$table->integer('doc_id'); 
            $table->text('description');
            $table->integer('progress');
			$table->string('status');
            $table->boolean('completed');
            $table->timestamps();
		});
		Schema::create('project_users', function(Blueprint $table)
		{
			$table->increments('id'); 
			$table->integer('project_id');  
			$table->integer('user_id');  
			$table->integer('level');  
			$table->boolean('owner');  
			$table->string('validity');  
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
		Schema::drop('projects');
		Schema::drop('project_users');
	}

}
