<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cars()
    {
      return $this->belongsToMany(Car::class)->using(CarDriver::class);
    }

    public function getFullnameAttribute()
    {
      return "{$this->firstname} {$this->lastname}";
    }
}
