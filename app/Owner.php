<?php

namespace App;

use App\Property;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_owner';
    protected $fillable = [
        'id_owner', 'id_user', 'temp_column'
    ];
    public function property()
    {
        return $this->hasMany(Property::class);
    }
}
