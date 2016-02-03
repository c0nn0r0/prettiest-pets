<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    	foreach (range(1, 37) as $index) {
	        DB::table('pets')->insert([
	            'name' => $faker->name
	        ]);
        }
    }
}
