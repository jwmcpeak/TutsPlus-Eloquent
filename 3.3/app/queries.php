<?php

// SELECT id, name, year FROM Guitars
App\Guitar::select('id', 'name', 'year')->get();

// SELECT id, name, year FROM Guitars WHERE year BETWEEN 1950 and 1962
App\Guitar::select('id', 'name', 'year')->whereBetween('year', [1950, 1962])->get();

// SELECT id, name, year FROM Guitars WHERE (year BETWEEN 1950 and 1962) OR (year BETWEEN 2010 and 2017)
App\Guitar::select('id', 'name', 'year')->
            whereBetween('year', [1950, 1962])->
            orWhereBetween('year', [2010, 2017])->
            get();

// SELECT id, name, year FROM Guitars WHERE (year BETWEEN 1950 and 1962) OR (year BETWEEN 2010 and 2017)
App\Guitar::select('id', 'name', 'year')->where(function($query) {
    $query->whereBetween('year', [1950, 1962]);
    $query->orWhereBetween('year', [2010, 2017]);
})->get();

// SELECT id, name, year FROM Guitars WHERE (year BETWEEN 1950 and 1962) 
// OR ((year BETWEEN 2010 and 2017) AND name LIKE '%vela%')
App\Guitar::select('id', 'name', 'year')->where(function($query) {
    $query->whereBetween('year', [1950, 1962]);

    $query->orWhereBetween('year', [2010, 2017]);
    $query->where('name', 'LIKE', '%la%');
})->get();

