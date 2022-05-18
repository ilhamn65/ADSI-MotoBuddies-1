@extends('layouts.app')

@section('content')
    <div class=" p-4 ">





        <div class="grid grid-cols-2 gap-4 text-center my-4 text-sm ">

            @foreach ($services as $service)
                <a href="{{ route('services.details', $service) }}"
                    class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                    <img src="/images/VOUCHER1.png" class="h-16 mx-auto" alt="BOOK">
                    <span>{{ $service->nama }}</span>
                </a>
            @endforeach








        </div>
    </div>
@endsection
