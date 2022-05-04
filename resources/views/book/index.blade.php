@extends('layouts.app')

@section('content')
    <div class=" px-8 py-4 ">


        <h1 class="text-2xl  font-bold mt-6 mb-4 shadow px-2 rounded">Book Service</h1>

        <form class="" action="#">



            <div class=" flex justify-start items-end gap-2 mb-2">


                <img class="h-7 w-7" src="{{ asset('/images/SCHEDULE_SERVICE.png') }}" alt="schedule">

                <div>

                    <label class="text-sm" for="date">Tanggal datang</label>
                    <input class="w-full" name="date" type="date" value="">
                </div>
            </div>


            <div class=" flex justify-start items-end gap-2 mb-2">
                <img class="h-7 w-7" src="{{ asset('/images/CAR.png') }}" alt="car icon">
                <div>

                    <label class="text-sm" for="model">Merek & model</label>
                    <input class="w-full" type="text" value="" name="model">
                </div>
            </div>
            <div class=" flex justify-start items-end gap-2 mb-2">

                <img class="h-7 w-7" src="{{ asset('/images/NOTE.png') }}" alt="note">
                <div>

                    <label class="text-sm" for="problemDesc">Deskripsi permasalahan</label>
                    <input name="problemDesc" class="w-full" type="text" value="">
                </div>
            </div>


            <div class="text-center my-14 shadow">

                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2  w-full  rounded mx-auto">Cari
                    Jadwal</button>
            </div>



        </form>






    </div>
    </div>
@endsection
