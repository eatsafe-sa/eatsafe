<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AssociateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//

		Schema::table('inspections', function($table)
		{
			$table->unsignedInteger('restaurant_id');
			$table->foreign('restaurant_id')->references('id')->on('restaurants');
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

		Schema::table('inspections', function($table) {
			$table->dropForeign('inspections_restaurant_id_foreign');
			$table->dropColumn('restaurant_id');
		});
	}

}
