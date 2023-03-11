<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonitoringJamur extends Model
{
    use HasFactory;

    public function jamur (){
    return $this->belongsTo(Jamur::class);
    }
}
