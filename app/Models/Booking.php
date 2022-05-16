<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;


    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function montir()
    {

        return $this->belongsTo(Montir::class);
    }

    public function booked_services()
    {
        return $this->belongsToMany(Service::class, 'booked_services')->withTimestamps();
    }

    public function provided_services()
    {
        return $this->belongsToMany(Service::class, 'provided_services')->withTimestamps();
    }
}
