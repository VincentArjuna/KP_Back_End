<?php

namespace App;

use App\Unit;
use App\Currency;
use App\Customer;
use App\Employee;
use Illuminate\Database\Eloquent\Model;

class Room_Reservation extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_room_reservation';
    protected $fillable = [
        'id_room_reservation', ' id_currency', 'id_employee',
        'id_customer', 'check_in_room_reservation', 
        'check_out_room_reservation', 'eta_room_reservation',
        'guest_adult_room_reservation', 'guest_child_room_reservation',
        'total_earned_room_reservation', 'temp_column'
    ];
    public function unit()
    {
        return $this->hasOne(Unit::class);
    }
    public function currency()
    {
        return $this->hasOne(Currency::class);
    }
    public function employee()
    {
        return $this->hasOne(Employee::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
