@extends('layouts.app')

@section('content')
    <!-- component -->
    <div
        class="min-h-screen flex flex-col max-w-md mx-auto bg-gray-200 opacity-100 font-poppins px-4 bg-no-repeat bg-cover bg-center">
        <div class="flex justify-between px-1 pt-4 items-center">


        </div>
        <div class="flex items-center px-4 pt-12 justify-between">
            <div class="w-24 h-24 bg-blue-600 flex items-center rounded-full">
                <img class="h-20 w-20 mx-auto" src="" alt="pp">
            </div>
            <div class="w-9/12 flex items-center">
                <div class="w-10/12 flex flex-col leading-none pl-4">
                    <p class="text-2xl font-bold">{{ auth()->user()->nama_depan }} {{ auth()->user()->nama_belakang }}
                    </p>
                    <p class="text-sm pt-1 font-light text-gray-700">Alamat disini</p>
                </div>
                <div class="w-2/12">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700" fill="currentColor"
                            viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M9.243 19H21v2H3v-4.243l9.9-9.9 4.242 4.244L9.242 19zm5.07-13.556l2.122-2.122a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414l-2.122 2.121-4.242-4.242z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 px-4">


            <div class="flex justify-between px-4 gap-4 my-4">

                <h1 class="inline text font-bold"> Daftar Kendaraan</h1>

                <a href="{{ route('addVehicle') }}"
                    class="text-center w-12 h-6 rounded shadow  text-blue-700 bg-white font-extrabold">+
                </a>
            </div>


            <div class=" mt-2 mb-4">
                <table class="table-auto w-full">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th>Merek</th>
                            <th>Model</th>
                            <th>Plat Nomor</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-50 text-center">

                        @foreach ($vehicles as $vehicle)
                            <tr class="border-2 border-gray-200">
                                <td class="px-2 py-1">{{ $vehicle->merek }}</td>
                                <td class="px-2 py-1">{{ $vehicle->model }}</td>
                                <td class="px-2 py-1 ">{{ $vehicle->plat_nomor }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>

            <div class="flex justify-center">

                {{ $vehicles->links() }}

            </div>



        </div>




        <div class=" my-24 text-center px-4 ">

            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class=" w-full bg-gray-800  rounded px-4 py-2  text-white hover:bg-slate-600 ">Logout</button>
            </form>

        </div>

    </div>
@endsection
