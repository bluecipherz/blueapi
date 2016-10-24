<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NotificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notification', function(Blueprint $table)
		{
			$table->increments('id'); 
            $table->string('description'); 
		 	$table->integer('user_id'); 
			$table->string('cat');  
			$table->string('heading');
			$table->boolean('seen');  
			$table->string('link_type'); 
			$table->integer('link_id');
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
		Schema::drop('notification'); 
	}


}
