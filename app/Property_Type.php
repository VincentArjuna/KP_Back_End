<?php

namespace App;

use App\Property;
use Illuminate\Database\Eloquent\Model;

class Property_Type extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_property_type';
    protected $fillable = [
        'id_property_type', 'name_property_type', 'temp_column'
    ];

    public function property()
    {
        return $this->belongsToMany(Property::class);
    }
}
