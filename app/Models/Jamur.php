<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamur extends Model
{
    use HasFactory;

    public function monitorings (){
    return $this->hasMany(MonitoringJamur::class);
    }

    public function alats (){
        return $this->hasMany(KendaliAlat::class);
        }
}
