<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    function vintage() {
        return $this->olderThan(date('Y') - 40);
    }

    function scopeOlderThan($query, $year) {
        return $query->where('year', '<', $year)->orderBy('year', 'asc');
    }
}
