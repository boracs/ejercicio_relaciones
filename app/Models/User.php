<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    use HasFactory;

protected $fillable = ['name','surbname','email','password'];




//relacion uno a uno 
public function address(){
    return $this->hasOne("App\Models\Address");
}

public function post(){
    return $this->hasMany("App\Models\Post");
}

}
