<?php

namespace App;

use App\Unit;
use Illuminate\Database\Eloquent\Model;

class Unit_Type extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_unit_type';
    protected $fillable = [
        'id_unit_type', 'name_unit_type', 'temp_column'
    ];
    public function unit()
    {
        return $this->belongsToMany(Unit::class);
    }
}
