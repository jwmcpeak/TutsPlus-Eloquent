<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = [
        'name'
    ];

    // protected $guarded = [
    //     'is_admin'
    // ];

//     protected $primayKey = 'manufacturer_id';
//     protected $table = 'my_manufacturers';
}
