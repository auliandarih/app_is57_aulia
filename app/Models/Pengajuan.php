<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    public function events(){
        return $this->hasOne(Event::class,'id','events_id');
    }
}
