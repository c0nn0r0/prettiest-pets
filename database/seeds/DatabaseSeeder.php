<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//$this->call(UserTableSeeder::class);	

    	DB::table('pets')->truncate();

    	Model::unguard();

	    $this->call(PetsTableSeeder::class);

	    Model::reguard();
    }
}
