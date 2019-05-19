<?php

namespace App;

use App\Employee;
use Illuminate\Database\Eloquent\Model;

class Employee_Type extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_employee_type';
    protected $fillable = [
        'id_employee_type', 'desc_employee_type','temp_column'
    ];
    public function employee()
    {
        return $this->belongsToMany(Employee::class);
    }
}
