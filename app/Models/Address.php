<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['province', 'municipality','street','number','flat','letter','user_id'];
    
    public function  user(){
        return $this->belongsTo("App\Models\User");
    }
    //public $timestamps = false;

}
