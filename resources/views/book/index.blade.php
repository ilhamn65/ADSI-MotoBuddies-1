@extends('layouts.app')

@section('content')
    <div class=" px-8 py-4 ">


        <h1 class="text-2xl  font-bold mt-6 mb-4 shadow px-2 rounded">Book Service</h1>

        <form class="" action="#">



            <div class=" flex justify-start items-end gap-2 mb-2">


                <img class="h-7 w-7" src="{{ asset('/images/SCHEDULE_SERVICE.png') }}" alt="schedule">

                <div>

                    <label class="text-sm" for="date">Tanggal datang</label>
                    {{-- findout how to extract current time and currentdate+15 --}}
                    <input class="w-56" name="date" min="2022-05-15" max="2022-05-30" type="date" value="">
                </div>
            </div>

            <div class=" flex justify-start items-end gap-2 mb-2">


                <img class="h-7 w-7" src="{{ asset('/images/SCHEDULE_SERVICE.png') }}" alt="schedule">

                <div>

                    <label class="text-sm" for="waktu">Waktu datang</label>
                    <select name="time" id="">
                        <option value="9">09:00</option>
                        <option value="10">10:00</option>
                        <option value="11">11:00</option>
                        <option value="12">12:00</option>
                        <option value="13">13:00</option>
                        <option value="14">14:00</option>
                        <option value="15">15:00</option>
                        <option value="16">16:00</option>
                    </select>
                </div>
            </div>


            <div class=" flex justify-start items-end gap-2 mb-2">
                <img class="h-7 w-7" src="{{ asset('/images/CAR.png') }}" alt="car icon">
                <div>

                    <label class="text-sm" for="tipe">Tipe</label>
                    <select class="w-56" name="tipe" id="">
                        <option value="Mobil">Mobil</option>
                        <option value="Motor">Motor</option>
                    </select>

                </div>
            </div>
            <div class=" flex justify-start items-end gap-2 mb-2">
                <img class="h-7 w-7" src="{{ asset('/images/CAR.png') }}" alt="car icon">
                <div>

                    <label class="text-sm" for="model">Model</label>
                    <input class="w-56" type="text" value="" name="model">
                </div>
            </div>
            <div class=" flex justify-start items-end gap-2 mb-2">
                <img class="h-7 w-7" src="{{ asset('/images/CAR.png') }}" alt="car icon">
                <div>

                    <label class="text-sm" for="merek">Merek</label>
                    <input class="w-56" type="text" value="" name="merek">
                </div>
            </div>
            <div class=" flex justify-start items-end gap-2 mb-2">

                <img class="h-7 w-7" src="{{ asset('/images/NOTE.png') }}" alt="note">
                <div>

                    <label class="text-sm" for="problemDesc">Deskripsi permasalahan</label>
                    <input name="problemDesc" class="w-56" type="text" value="">
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
