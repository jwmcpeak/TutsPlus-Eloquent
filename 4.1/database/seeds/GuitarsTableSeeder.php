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
        App\Manufacturer::truncate();
        App\Guitar::truncate();

        $prs = App\Manufacturer::create(['name' => 'PRS']);
        $fender = App\Manufacturer::create(['name'=>'Fender']);
        $gibson = App\Manufacturer::create(['name'=>'Gibson']);

        // $prs->guitars()->save(
        //     new App\Guitar(['name' => 'Vela', 'year' => 2017])
        // );

        $prs->guitars()->saveMany([
            new App\Guitar(['name' => 'Vela', 'year' => 2017]),
            new App\Guitar(['name' => 'Starla', 'year' => 2015])
        ]);

        $fender->guitars()->create(
            ['name' => 'Strat', 'year' => 1956]
        );

        $gibson->guitars()->createMany([
            ['name' => 'Les Paul',  'year' => 2011],
            ['name' => 'Explorer', 'year' => 1970]
        ]);        
    }
}
