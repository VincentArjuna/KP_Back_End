<?php

namespace App;

use App\Unit;
use App\Amenity;
use Illuminate\Database\Eloquent\Model;

class Unit_Amenities extends Model
{
    protected $fillable = [
        'id_unit', 'id_amenity', 'temp_column'
    ];
    public function unit()
    {
        return $this->hasMany(Unit::class);
    }
    public function amenity()
    {
        return $this->hasMany(Amenity::class);
    }
}
