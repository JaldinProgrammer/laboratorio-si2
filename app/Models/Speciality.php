<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function user_speciality(){
        return $this->hasMany('App\Models\UserSpeciality');
    }
}
