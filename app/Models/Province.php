<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    // one to many or 1:M
    public function teacher(){
        return $this->hasMany(Teacher::class,'province_id','id');
      
    }

    public function region(){
        return $this->belongsTo(Region::class,'region_id','id');
    }
}