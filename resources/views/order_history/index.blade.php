@extends('layouts.app')




@section('content')
    <div class="pt-6 pb-3 grid grid-cols-2 gap-4 border-b border-white ">

        <button class=" px-3 py-1 rounded  shadow bg-blue-600 text-white">Spareparts</button>
        <button class="px-3 py-1 rounded shadow-md ">Services</button>

    </div>


    <div>
        <div class="mw6 center pa3 sans-serif">




            {{-- @foreach ($users as $user)
                <div class="pa2 mb3 striped--near-white">

                    <header class="b mb2">{{ $user->name }}</header>

                    <div class="pl2">

                        <p class="mb2">id: {{ $user->id }}</p>

                        <p class="mb2">email: {{ $user->email }}</p>

                        <p class="mb2">details: {{ $user->remember_token }}</p>

                    </div>

                </div>
            @endforeach --}}

        </div>
    </div>
@endsection
