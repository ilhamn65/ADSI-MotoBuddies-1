@extends('layouts.app')

@section('content')
    <div class=" px-8 py-4 ">


        <h1 class="text-2xl  font-bold mt-6 mb-4 shadow px-2 rounded">Book Service</h1>

        <form class="" action="{{ route('book') }}" method="post">

            @csrf

            <div class=" flex justify-start items-end gap-2 mb-2">



                <img class="h-7 w-7" src="{{ asset('/images/SCHEDULE_SERVICE.png') }}" alt="schedule">

                <div>

                    <label class="text-sm" for="date">Tanggal & Waktu Datang</label>
                    {{-- findout how to extract current time and currentdate+15 --}}
                    <input class="w-56" name="date" min="{{ \Carbon\carbon::tomorrow()->toDateString() }}"
                        max="{{ \Carbon\carbon::tomorrow()->addDays(15)->toDateString() }}" type="date"
                        value="{{ old('date') }}">

                </div>
                <select name="time" id="" value="{{ old('time') }}">
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



            <div class="my-4 flex justify-start items-end gap-2 ">
                <img class="h-7 w-7" src="{{ asset('/images/CAR.png') }}" alt="car icon">
                <div>

                    <label class="text-sm" for="tipe">Kendaraan</label>

                    @if ($vehicles->count())
                        <select class="w-56" name="vehicle" id="">

                            @foreach ($vehicles as $vehicle)
                                <option value="{{ $vehicle->id }}">{{ $vehicle->merek . ' ' . $vehicle->model }}
                                </option>
                            @endforeach

                        </select>
                    @else
                        <div class="px-5 ">

                            Tambah Kendaraan Sebelum Melanjutkan
                        </div>
                    @endif
                </div>

                <a href="{{ route('addVehicle') }}"
                    class="text-center px-4 py-2 rounded shadow  text-blue-700 bg-white font-extrabold"> +</a>

            </div>

            <div class=" flex justify-start items-end gap-2 mb-2">

                <img class="h-7 w-7" src="{{ asset('/images/NOTE.png') }}" alt="note">
                <div>

                    <label class="text-sm" for="deskripsi_permasalahan">Deskripsi Permasalahan</label>
                    <textarea name="deskripsi_permasalahan" class="w-56 h-32" type="text-area"
                        value="{{ old('deskripsi_permasalahan') }}"></textarea>
                </div>
            </div>


            <div class="text-center my-14 shadow">

                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2  w-full  shadow-lg rounded mx-auto">Cari
                    Jadwal</button>
            </div>



        </form>

    </div>
    </div>
@endsection
