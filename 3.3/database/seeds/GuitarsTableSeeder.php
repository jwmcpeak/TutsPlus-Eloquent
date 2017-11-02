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
        \App\Guitar::truncate();
        \App\Guitar::create(['name' => 'Vela', 'year' => 2017]);
        \App\Guitar::create(['name' => 'Starla', 'year' => 2015]);
        \App\Guitar::create(['name' => 'Les Paul',  'year' => 2011]);
        \App\Guitar::create(['name' => 'Explorer', 'year' => 1970]);
        \App\Guitar::create(['name' => 'Strat', 'year' => 1956]);

        factory(App\Guitar::class, 20)->create();
        
    }
}
