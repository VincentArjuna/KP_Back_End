<?php

namespace App;

use App\Bed_Type;
use App\Currency;
use App\Property;
use App\Unit_Type;
use App\Unit_Amenities;
use App\Unit_Facilities;
use App\Room_Reservation;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_unit';
    protected $fillable = [
        'id_unit', 'id_currency', 'id_unit_type', 'id_property',
        'id_bed_type', 'name_unit', 'desc_unit','qty_unit',
        'empty_qty_unit', 'base_price_unit', 'nightly_price_unit',
        'pricing_type_unit','temp_column'
    ];
    public function unit_amenities()
    {
        return $this->belongsToMany(Unit_Amenities::class);
    }
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
    public function unit_type()
    {
        return $this->hasOne(Unit_Type::class);
    }
    public function bed_type()
    {
        return $this->hasOne(Bed_Type::class);
    }
    public function currency()
    {
        return $this->hasOne(Currency::class);
    }
    public function unit_facilities()
    {
        return $this->belongsToMany(Unit_Facilities::class);
    }
    public function room_reservation()
    {
        return $this->belongsToMany(Room_Reservation::class);
    }
    
}
