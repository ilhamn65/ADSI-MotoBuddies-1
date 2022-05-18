@extends('layouts.app')

@section('content')
    <div class=" p-4 ">


        <div class="bg-blue-600 p-5 text-white">

            <p class="text-lg font-bold">

                List Spareparts
            </p>
        </div>



        <div class="grid grid-cols-2 gap-4 text-center mb-24 mt-4 text-sm ">

            @foreach ($products as $product)
                <a href="{{ route('products.details', $product) }}"
                    class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                    <img class="w-full" src="/images/BOOKINGGRAPHIC.png" class="h-16 mx-auto" alt="BOOK">
                    <span>{{ $product->nama }}</span>
                </a>
            @endforeach


        </div>
    </div>
@endsection
