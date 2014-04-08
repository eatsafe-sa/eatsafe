<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurants extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('restaurants', function($table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->string('address', 100);
			$table->integer('zip')->unsigned();
			//$table->unique(array('name', 'address'));
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
		//
		Schema::dropIfExists('restaurants');
	}

}
