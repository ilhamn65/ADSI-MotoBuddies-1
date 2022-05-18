@extends('layouts.app')

@section('content')
    <div class="container  py-28">

        <img src="/images/BOOKINGGRAPHIC.png" alt="GRAPHIC">

        <div class="my-16 text-center ">

            <h1 class="font-bold text-2xl text-gray-800">Booking Berhasil !</h1>
            <p class="text-lg">
                Lihat booking kamu
                <span class="text-blue-600 font-medium">

                    <a href="{{ route('myBookings') }}">

                        Disni
                    </a>
                </span>
                atau lanjutkan ke
                <span class="text-blue-600 font-medium">

                    <a href="{{ route('dashboard') }}">

                        Pembayaran
                    </a>
                </span>
            </p>


        </div>

    </div>
@endsection
