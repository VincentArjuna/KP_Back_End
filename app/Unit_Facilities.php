<?php

namespace App;

use App\Unit;
use App\Facility;
use Illuminate\Database\Eloquent\Model;

class Unit_Facilities extends Model
{
    protected $fillable = [
        'id_facility', 'id_unit', 'temp_column'
    ];
    public function unit()
    {
        return $this->hasMany(Unit::class);
    }
    public function facility()
    {
        return $this->hasMany(Facility::class);
    }
}
