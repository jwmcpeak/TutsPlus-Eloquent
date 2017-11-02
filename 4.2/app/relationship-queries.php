<?php

App\Manufacturer::with('guitars')->get();

App\Manufacturer::has('guitars')->get();

App\Manufacturer::withCount('guitars')->get();

App\Manufacturer::whereName('fender')->get();