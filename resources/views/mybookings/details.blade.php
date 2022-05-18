@extends('layouts.app')

@section('content')
    <div class=" mt-2 mb-4">


        <div class="w-full max-w-lg mx-auto">
            <div class="rounded-lg shadow-lg p-12 text-xs mt-8 mx-4 sm:mx-0 bg-white">
                <div>
                    <div class="flex flex-col">
                        <h1 class="text-gray-800 text-xl font-medium mb-2">Pesanan {{ $booking->nama_pelanggan }}</h1>
                        <p class="text-gray-600 text-xs">{{ $booking->created_at }}</p>
                        <p class="text-gray-600 text-xs">Order Number: {{ $booking->id }}</p>
                    </div>
                    <hr class="my-4">
                    <div>

                        @foreach ($bookedServices as $bookedService)
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-base">Servis {{ $bookedService->nama }}</span><span
                                    class="text-base font-medium">Rp. {{ $bookedService->harga }}</span>
                            </div>
                            <div class="mb-4 flex justify-between items-center">
                                <span>Durasi Pengerjaan : </span><span
                                    class="">{{ $bookedService->perkiraan_durasi }} Menit</span>
                            </div>
                        @endforeach


                        <hr class="my-4">

                        <div class="flex justify-between items-center">
                            <span class="text-lg font-medium">Total</span><span class="text-lg font-medium">Rp.
                                {{ $booking->perkiraan_harga }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>
@endsection
