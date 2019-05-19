<?php

namespace App;

use App\Unit;
use Illuminate\Database\Eloquent\Model;

class Bed_Type extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_bed_type';
    protected $fillable = [
        'id_bed_type', 'name_bed_type', 'capacity_bed_type',
        'temp_column'
    ];
    public function unit()
    {
        return $this->belongsToMany(Unit::class);
    }
}
