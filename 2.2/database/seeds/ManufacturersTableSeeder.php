<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('manufacturers')->truncate();
        \DB::table('manufacturers')->insert(['name' => 'PRS']);
        \DB::table('manufacturers')->insert(['name' => 'Fender']);
        \DB::table('manufacturers')->insert(['name' => 'Gibson']);
    }
}
