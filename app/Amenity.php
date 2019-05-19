<?php

namespace App;

use App\Unit_Amenities;
use App\Property_Amenities;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_amenity';
    protected $fillable = [
        'id_amenity', 'name_amenity', 'desc_amenity',
        'temp_column'
    ];
    public function property_amenities()
    {
        return $this->belongsToMany(Property_Amenities::class);
    }
    public function unit_amenities()
    {
        return $this->belongsToMany(Unit_Amenities::class);
    }
}
