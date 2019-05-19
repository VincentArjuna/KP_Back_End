<?php

namespace App;

use App\Facility;
use App\Property;
use Illuminate\Database\Eloquent\Model;

class Property_Facilities extends Model
{
    protected $fillable = [
        'id_facility', 'id_property', 'temp_column'
    ];
    public function property()
    {
        return $this->hasMany(Property::class);
    }
    public function facility()
    {
        return $this->hasMany(Facility::class);
    }
}
