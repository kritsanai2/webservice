<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function Teachar() {              // fk    ,     fk
        return $this->belongsTo(provinec::class,'country_id','id');
}
}