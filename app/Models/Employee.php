<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
  
    public function position(){
    	return $this->belongsTo('\App\Models\Employee','position','id');
    }
  
    public function department(){
    	return $this->belongsTo('\App\Models\Employee','department','id');
    }

}
