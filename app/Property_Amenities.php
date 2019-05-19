<?php

namespace App;

use App\Amenity;
use App\Property;
use Illuminate\Database\Eloquent\Model;

class Property_Amenities extends Model
{
    protected $fillable = [
        'id_amenity', 'id_property', 'temp_column'
    ];

    public function property()
    {
        return $this->hasMany(Property::class);
    }
    public function amenity()
    {
        return $this->hasMany(Amenity::class);
    }
}
