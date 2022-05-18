@extends('layouts.app')

@section('content')
    <div class=" px-8 py-4 ">


        <h1 class="text-2xl  font-bold mt-6 mb-4 shadow px-2 rounded">Book Service</h1>

        <form class="" action="{{ route('book') }}" method="post">

            @csrf

            <div class=" flex justify-start items-end gap-2 mb-2">



                <img class="h-7 w-7" src="{{ asset('/images/SCHEDULE_SERVICE.png') }}" alt="schedule">

                <div>

                    <label class="text-sm" for="date">Tanggal Datang</label>
                    {{-- findout how to extract current time and currentdate+15 --}}
                    <input class="w-full" name="date" min="{{ \Carbon\carbon::tomorrow()->toDateString() }}"
                        max="{{ \Carbon\carbon::tomorrow()->addDays(7)->toDateString() }}" type="date"
                        value="{{ old('date') }}">

                </div>
                <select name="time" id="" value="{{ old('time') }}">
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                </select>

            </div>



            <div class="my-4 flex justify-start items-end gap-2 ">
                <img class="h-7 w-7" src="{{ asset('/images/CAR.png') }}" alt="car icon">
                <div>

                    <label class="text-sm" for="tipe">Kendaraan</label>

                    @if ($vehicles->count())
                        <select class="w-56" name="vehicle_id" id="">

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
                    <textarea name="deskripsi_permasalahan" class="w-56 h-32" type="text-area" placeholder=""
                        value="{{ old('deskripsi_permasalahan') }}""></textarea>
                </div>
            </div>


            <div class="my-4 ">

                <div class="flex justify-start items-end gap-2 mb-2 ">
                    <div class="">

                        <label class=" text-sm font-bold" for="tipe">Service yang Diinginkan</label>

                        <div class="bg-gray-200 px-5 py-2 mt-2">



                            @foreach ([0, 1, 2] as $index)
                                <div class="flex justify-evenly gap-3 my-1">

                                    <select class="w-60" name="bookedServices[{{ $index }}][service]">
                                        @if ($services->count())
                                            <option value="">-- Choose Services --</option>
                                        @else
                                            <option value="">--- Service Unavailable ---</option>
                                        @endif
                                        @foreach ($services as $service)
                                            <option value="{{ $service }}">{{ $service->nama }}
                                                Rp.{{ $service->harga }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <a href="#"
                                        class="text-center px-2 py-1 rounded shadow-lg font-bold bg-white  text-red-500">X</a>
                                </div>
                            @endforeach

                        </div>
                    </div>


                </div>
                <div class="flex justify-end">
                    <a href="#"
                        class="text-center  px-4 py-2 w-full text-sm rounded shadow-md hover:bg-gray-300 bg-gray-200 text-gray-700 ">Tambah
                        Service +
                    </a>
                </div>
            </div>



            <div class="text-center my-14 mb-24 shadow">

                <button class="bg-blue-500 hover:bg-blue-700 text-white text  py-2  w-full  shadow-lg rounded ">Cari
                    Jadwal</button>
            </div>



        </form>

    </div>
    </div>
@endsection
