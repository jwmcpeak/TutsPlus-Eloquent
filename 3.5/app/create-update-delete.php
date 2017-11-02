<?php

$talman = new App\Guitar();
$talman->name = 'Talman';
$talman->year = 1996;
$talman->save();

App\Manufacturer::create(['name' => 'Ibanez']);

$guitar = App\Guitar::findOrNew(100); // new model object
$guitar2 = App\Guitar::firstOrNew(['name'=>'Custom 24']); // new model object
$guitar3 = App\Guitar::firstOrCreate(['name'=>'Custom 24', 'year' => 2014]);

if ($guitar->exists) {
    // it is in the db
} else {
    // new model object
}

App\Guitar::updateOrCreate(['id'=> 100], ['name' => 'Vela (Satin)']);

App\Guitar::find(15)->delete();