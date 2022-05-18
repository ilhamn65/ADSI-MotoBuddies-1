@extends('layouts.app')

@section('content')
    <div class=" mt-2 mb-4">
        <table class="table-auto w-full">
            <thead class="bg-blue-500 text-white">
                <tr>

                    <th>Kendaraan</th>

                    <th>Waktu Booking</th>
                    <th>Estimasi Harga</th>

                </tr>
            </thead>
            <tbody class="bg-gray-50 text-center">

                @foreach ($bookings as $booking)
                    <tr class="border-2 border-gray-200">

                        <td class="px-2 py-1">{{ $booking->merek_kendaraan }} {{ $booking->model_kendaraan }}</td>
                        <td class="px-2 py-1 ">{{ $booking->waktu_mulai }}</td>
                        <td class="px-2 py-1 ">Rp. {{ $booking->perkiraan_harga }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
