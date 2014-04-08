<?php

class RestaurantTableSeeder extends Seeder {

	public function run() {
		

		$restaurant = new Restaurant();
		$restaurant->name = 'Travs Yummy Eats';
		$restaurant->address = '101 Main Street';
		$restaurant->zip = 78232;
		$restaurant->save();

		$inspection = new Inspection();
		$inspection->last_date = '01/01/01';
		$inspection->demerits = 6;
		$inspection->restaurant_id = $restaurant->id;
		$inspection->save();
	}
}