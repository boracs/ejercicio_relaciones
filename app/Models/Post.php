<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Asignatura;


class Post extends Model
{
    use HasFactory;

    protected $filllable = ['title','content','user_id'];

    public function  user(){
        return $this->belongsTo("App\Models\User");
    }
  
   // public $timestamps = false;



    
    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class);
    }
}
