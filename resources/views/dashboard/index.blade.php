@extends('layouts.app')

@section('content')
    <div class=" p-4 ">


        <img src="/images/VOUCHER1.png" class="h-32 mx-auto MB-3" alt="VOUCHER">


        <div class="grid grid-cols-3 gap-4 text-center my-12 text-sm ">
            <a href="#"
                class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                <img src="/images/FIND.png" class="h-16 mx-auto" alt="find dealer">

                <span>Find Dealer</span>
            </a>

            <a href="{{ route('book') }}"
                class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                <img src="/images/BOOK.png" class="h-16 mx-auto" alt="BOOK">
                <span>Book Servis</span>
            </a>
            <a href="#"
                class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                <img src="/images/SPAREPARTS.png" class="h-16 mx-auto" alt="SPAREPARTS">
                <span>Spare Parts</span>
            </a>
            <a href="#"
                class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                <img src="/images/TIPS.png" class="h-16 mx-auto" alt="TIPSTRICKS">
                <span>Tips and Tricks</span>
            </a>
            <a href="#"
                class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                <img src="/images/SERVICES.png" class="h-16 mx-auto" alt="SERVICES">
                <span>Pilihan Servis</span>
            </a>
            <a href="{{ route('myBookings') }}"
                class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                <img src="/images/SCHEDULE.png" class="h-16 mx-auto" alt="SCHEDULE">
                <span>My Bookings</span>
            </a>






        </div>
    </div>
@endsection
