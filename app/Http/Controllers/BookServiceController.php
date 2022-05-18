<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Service;
use App\Models\Booking;
use Carbon\Carbon;

class BookServiceController extends Controller
{



    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function index()
    {


        $vehicles = auth()->user()->kendaraans;

        return view('book.index', [
            "vehicles" => $vehicles,
        ]);
    }



    public function store(Request $request)
    {

        $this->validate(
            $request,
            [
                'date' => "required|Date",
                'time' => "required",
                'deskripsi_permasalahan' => "required|max:255",
            ]
        );



        $pelanggan = $request->user();
        $kendaraan = Kendaraan::find($request->vehicle_id);
        $bookingTime = new Carbon($request->date . "T" . $request->time, 'Asia/Jakarta');
        $estimatedServiceTime = 0;
        $estimatedPrice = 0;


        foreach ($request->bookedServices as $bookedService) {
            $estimatedServiceTime += json_decode($bookedService['service'], false)->perkiraan_durasi;
            $estimatedPrice += json_decode($bookedService['service'], false)->harga;
        }




        $booking = $request->user()->bookings()->create([
            'nama_pelanggan' => $pelanggan->nama_depan . " " . $pelanggan->nama_belakang,
            'no_telepon_pelanggan' => $pelanggan->no_telepon,
            'email_pelanggan' => $pelanggan->email,
            'waktu_mulai' => new Carbon($request->date . "T" . $request->time, 'Asia/Jakarta'),
            'perkiraan_waktu_selesai' => $bookingTime->addMinutes($estimatedServiceTime),
            'perkiraan_harga' => $estimatedPrice,
            'batal' => 0,
            'deskripsi_permasalahan' => $request->deskripsi_permasalahan,
            'tipe_kendaraan' => $kendaraan->tipe,
            'merek_kendaraan' => $kendaraan->merek,
            'model_kendaraan' => $kendaraan->model,
            'plat_nomor_kendaraan' => $kendaraan->plat_nomor,

        ]);

        foreach ($request->bookedServices as $bookedService) {
            $booking->booked_services()->attach(json_decode($bookedService['service'], false)->id);
        }


        dd(Booking::get());
    }
}
