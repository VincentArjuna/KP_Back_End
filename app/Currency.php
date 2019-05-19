<?php

namespace App;

use App\Unit;
use App\Room_Reservation;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_currency';
    protected $fillable = [
        'id_currencey', 'name_currency', 'temp_column'
    ];
    public function room_reservation()
    {
        return $this->belongsToMany(Room_Reservation::class);
    }
    public function unit()
    {
        return $this->belongsToMany(Unit::class);
    }
}
