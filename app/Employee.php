<?php

namespace App;

use App\User;
use App\Employee_Type;
use App\Room_Reservation;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_employee';
    protected $fillable = [
        'id_employee', 'id_employee_type', 'id_user',
        'address_employee', 'phone_employee', 'status_employee',
        'temp_column'
    ];
    public function employee_type()
    {
        return $this->hasOne(Employee_Type::class);
    }
    public function room_reservation()
    {
        return $this->belongsToMany(Room_Reservation::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
