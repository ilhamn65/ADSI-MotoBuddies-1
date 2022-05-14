<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MontirSchedule extends Model
{
    use HasFactory;


    public function montir()
    {
        return $this->belongsTo(Montir::class);
    }
}
