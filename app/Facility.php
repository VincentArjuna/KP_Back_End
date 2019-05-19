<?php

namespace App;

use App\Unit_Facilities;
use App\Property_Facilities;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_facility';
    protected $fillable = [
        'id_facility', 'name_facility', 'desc_facility',
        'temp_column'
    ];
    public function property_facilities()
    {
        return $this->belongsToMany(Property_Facilities::class);
    }
    public function unit_facilities()
    {
        return $this->belongsToMany(Unit_Facilities::class);
    }
}
