<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;



    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'kartu_garansi',
    ];


    public function bookedBy()
    {
        return $this->belongsToMany(Booking::class, 'booked_services')->withTimestamps();
    }
    public function providedTo()
    {
        return $this->belongsToMany(Booking::class, 'provided_services')->withTimestamps();
    }
}
