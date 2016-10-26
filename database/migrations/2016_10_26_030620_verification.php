<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Verification extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('verification', function(Blueprint $table)
		{
			$table->increments('id');     
			$table->integer('verification_id');   
			$table->integer('current');  
			$table->integer('limit');  
			$table->boolean('verified'); 
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
		Schema::drop('verification');
	}


}
