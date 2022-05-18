@extends('layouts.app')

@section('content')
    <div class=" mt-2 mb-4">


        <div class="w-full max-w-lg mx-auto">
            <div class="rounded-lg shadow-lg p-12 text-xs mt-8 mx-4 sm:mx-0 bg-white">
                <img src="/images/BOOKINGGRAPHIC.png" class="h-32 mx-auto MB-3" alt="VOUCHER">
                <div class="my-8">
                    <div class="flex flex-col">
                        <h1 class="text-gray-800 text-xl font-medium mb-2">Service {{ $service->nama }}</h1>
                        <p class="text-gray-600  text-justify ">{{ $service->deskripsi }}</p>

                    </div>
                    <hr class="my-4">
                    <div class="flex justify-between">
                        <span>
                            Perkiraan durasi pengerjaan :
                        </span>
                        <span>
                            {{ $service->perkiraan_durasi }} Menit
                        </span>
                    </div>
                    <div>
                        <hr class="my-4">

                        <div class="flex justify-between items-center">
                            <span class="text-lg font-medium">Harga Service</span><span class="text-lg font-medium">Rp.
                                {{ $service->harga }}
                            </span>
                        </div>
                    </div>

                </div>
            </div>





        </div>
    @endsection
