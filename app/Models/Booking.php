<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    use HasFactory;


    protected $fillable = [
        'pelanggan_id',
        'montir_id',
        'nama_pelanggan',
        'no_telepon_pelanggan',
        'email_pelanggan',
        'waktu_mulai',
        'perkiraan_waktu_selesai',
        'perkiraan_harga',
        'batal',
        'deskripsi_permasalahan',
        'tipe_kendaraan',
        'merek_kendaraan',
        'model_kendaraan',
        'plat_nomor_kendaraan',
    ];


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
