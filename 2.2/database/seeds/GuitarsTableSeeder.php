<?php

use Illuminate\Database\Seeder;

class GuitarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('guitars')->truncate();
        \DB::table('guitars')->insert(['name' => 'Vela']);
        \DB::table('guitars')->insert(['name' => 'Starla']);
        \DB::table('guitars')->insert(['name' => 'Les Paul']);
        \DB::table('guitars')->insert(['name' => 'Explorer']);
        \DB::table('guitars')->insert(['name' => 'Strat']);

        for ($i = 0; $i < 20; $i++) {
            \DB::table('guitars')->insert(['name' => str_random(12)]);
        }
        
    }
}
