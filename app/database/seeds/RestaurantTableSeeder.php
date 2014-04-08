<?php

class RestaurantTableSeeder extends Seeder {

	public function run() {
		
		// Test db seed (worked, woo)
		// $restaurant = new Restaurant();
		// $restaurant->name = 'Travs Yummy Eats';
		// $restaurant->address = '101 Main Street';
		// $restaurant->zip = 78232;
		// $restaurant->save();

		// $inspection = new Inspection();
		// $inspection->last_date = '01/01/01';
		// $inspection->demerits = 6;
		// $inspection->restaurant_id = $restaurant->id;
		// $inspection->save();

		$data = file_get_contents('public/assets/inspections.json');
		$json = json_decode($data);

		function getName($val) {
			return trim(preg_replace("/[^A-Za-z ]/", '', $val));
		}

		function getZip($val) {
			$temp = explode(' ', $val);
			$zip = array_pop($temp);
			return substr($zip, 0, 5);
		}

		function getState($val) {
			$temp = explode(' ', $val);
			array_pop($temp);
			$state = array_pop($temp);
			return strtoupper($state);
		}

		function getStreet($val) {
			$temp = explode(' ', $val);
			array_pop($temp);
			array_pop($temp);
			$check = array_pop($temp);

			if ($check == 'antonio,') {
				array_pop($temp);
				$street = implode(' ', $temp);
			} else {

				$street = implode(' ', $temp);
			}
			return trim(preg_replace("/[^A-Za-z 0-9]/", '', $street));
		}

		function getCity($val) {
			$temp = explode(' ', $val);
			array_pop($temp);
			array_pop($temp);
			$city = preg_replace("/[^A-Za-z 0-9]/", '', array_pop($temp));

			if ($city !== 'antonio') {
				return ucfirst($city);
			} else {
				return "San " . ucfirst($city);
			}
		}

		foreach($json as $entry) {

			$place = new Restaurant();

			$place->name = getName($entry->name);
			$place->address = getStreet($entry->address);
			$place->zip = getZip($entry->address);
			$place->save();
			// echo $place->id . PHP_EOL;

			$inspect = new Inspection();

			$inspect->last_date = $entry->date;
			$inspect->demerits = $entry->demerits;
			$inspect->url = $entry->link;
			
			$inspect->restaurant_id = $place->id;
			$inspect->save();
		}
	}
}