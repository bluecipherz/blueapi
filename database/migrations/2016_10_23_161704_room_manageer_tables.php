<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoomManageerTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('room_wallet_report', function(Blueprint $table)
		{
			$table->increments('id'); 
            $table->string('description'); 
		 	$table->integer('user_id'); 
			$table->string('cat');  
			$table->integer('amount');  
			$table->boolean('verified'); 
			$table->timestamps(); 
		}); 

		Schema::create('room_wallet', function(Blueprint $table)
		{
			$table->increments('id');       
			$table->integer('amount');      
			$table->integer('week_fund'); 
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
		Schema::drop('room_wallet_report');
		Schema::drop('room_wallet'); 
	}


}
