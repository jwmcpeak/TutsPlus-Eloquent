<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manufacturer extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name'
    ];

    function guitars() {
        return $this->hasMany('App\Guitar');
    }

    // protected $guarded = [
    //     'is_admin'
    // ];

//     protected $primayKey = 'manufacturer_id';
//     protected $table = 'my_manufacturers';
}
