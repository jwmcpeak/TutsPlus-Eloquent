<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Guitar extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];

    function manufacturer() {
        return $this->belongsTo('App\Manufacturer');
    }

    function getNameAttribute($value) {
        return strtolower($value);
    }

    function getMyCoolNameAttribute() {
        return "{$this->id}: {$this->name}";
    }

    function setNameAttribute($value) {
        return $this->attributes['name'] = ucwords($value);
    }

    function vintage() {
        return $this->olderThan(date('Y') - 40);
    }

    function scopeOlderThan($query, $year) {
        return $query->where('year', '<', $year)->orderBy('year', 'asc');
    }
}
