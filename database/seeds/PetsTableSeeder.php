<?php

use Illuminate\Database\Seeder;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([
            'name' => 'molly'
        ]);
        
        DB::table('pets')->insert([
            'name' => 'bertrand'
        ]);

        DB::table('pets')->insert([
            'name' => 'olgar'
        ]);
    }
}
