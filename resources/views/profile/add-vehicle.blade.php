@extends('layouts.app')

@section('content')
    <div class=" px-8 py-4 ">


        <h1 class="text-2xl  font-bold mt-6 mb-4 shadow px-2 rounded">Tambah Kendaraan</h1>

        <form class="" action="{{ route('addVehicle') }}" method="post">
            @csrf

            @php
                $url = url()->previous();
                $route = app('router')
                    ->getRoutes($url)
                    ->match(app('request')->create($url))
                    ->getName();
            @endphp
            <input type="hidden" name="route" value="{{ $route }}">

            <div class=" flex justify-start items-end gap-2 mb-2">
                <img class="h-7 w-7" src="{{ asset('/images/CAR.png') }}" alt="car icon">
                <div>

                    <label class="text-sm" for="tipe">Tipe Kendaraan</label>
                    <select class="w-full" name="tipe" id="">
                        <option value="mobil">Mobil</option>
                        <option value="motor">Motor</option>
                    </select>

                </div>

            </div>

            <div class=" flex justify-start items-end gap-2 mb-2">
                <img class="h-7 w-7" src="{{ asset('/images/CAR.png') }}" alt="car icon">
                <div>

                    <label class="text-sm" for="merek">Merek Kendaraan</label>
                    <input class="w-full" type="text" name="merek" placeholder="contoh: BMW, Toyota, Honda">
                    @error('merek')
                        <span class="px-1 text-sm text-red-600">{{ $message }}</span>
                    @enderror

                </div>

            </div>




            <div class=" flex justify-start items-end gap-2 mb-2">
                <img class="h-7 w-7" src="{{ asset('/images/CAR.png') }}" alt="car icon">
                <div>

                    <label class="text-sm" for="model">Model Kendaraan</label>
                    <input class="w-full" type="text" name="model"
                        placeholder="contoh : Tesla Model Y, Porsche 911 ">
                    @error('model')
                        <span class="px-1 text-sm text-red-600">{{ $message }}</span>
                    @enderror

                </div>

            </div>



            <div class=" flex justify-start items-end gap-2 mb-2">
                <img class="h-7 w-7" src="{{ asset('/images/CAR.png') }}" alt="car icon">
                <div>

                    <label class="text-sm" for="plat_nomor">Plat Nomor Kendaraan</label>
                    <input class="w-full" type="text" name="plat_nomor" placeholder="">
                    @error('plat_nomor')
                        <span class="px-1 text-sm text-red-600">{{ $message }}</span>
                    @enderror

                </div>

            </div>




            <div class="text-center my-14 shadow">

                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2  w-full  shadow-lg rounded mx-auto">Tambah
                    Kendaraan</button>
            </div>



        </form>

    </div>
    </div>
@endsection
