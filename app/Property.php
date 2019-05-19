<?php

namespace App;

use App\Unit;
use App\Owner;
use App\Property_Type;
use App\Property_Amenities;
use App\Property_Facilities;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_property';
    protected $fillable = [
        'id_property', 'id_property_type', 'id_owner',
        'name_property', 'c_lat_property','c_long_property',
        'temp_column'
    ];

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
    public function property_type()
    {
        return $this->hasOne(Property_Type::class);
    }
    public function property_facilities()
    {
        return $this->belongsToMany(Property_Facilities::class);
    }
    public function property_amenities()
    {
        return $this->belongsToMany(Property_Amenities::class);
    }
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
    
}
