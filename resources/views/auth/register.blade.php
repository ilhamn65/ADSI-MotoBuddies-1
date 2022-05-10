<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motobuddies</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>


    <!-- component -->


    <div class="container max-w-full mx-auto py-24 px-6">
        <div class="font-sans">
            <div class="max-w-sm mx-auto px-6">
                <div class="relative flex flex-wrap">
                    <div class="w-full relative">
                        <div class="mt-6">


                            <form action="{{ route('register') }}" method="post" class="mt-8">
                                @csrf
                                <div class="mx-auto max-w-lg">

                                    {{-- nama depan --}}
                                    <div class="py-2">
                                        <span class="px-1 text-sm text-gray-600">Nama depan</span>
                                        <input name="first_name" placeholder="" type="text"
                                            value="{{ old('first_name') }}"
                                            class="@error('first_name') border-red-500 @enderror  text-md block px-3 py-2  rounded-lg w-full 
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none ">

                                        @error('first_name')
                                            <span class="px-1 text-sm text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- nama belakang --}}
                                    <div class="py-2">
                                        <span class="px-1 text-sm text-gray-600">Nama belakang</span>
                                        <input name="last_name" placeholder="" type="text"
                                            value="{{ old('last_name') }}"
                                            class="@error('last_name') border-red-500 @enderror  text-md block px-3 py-2  rounded-lg w-full 
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none ">

                                        @error('last_name')
                                            <span class="px-1 text-sm text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    {{-- tanggal lahir --}}
                                    <div class="py-2">
                                        <span class="px-1 text-sm text-gray-600">Tanggal lahir</span>
                                        <input name="tanggal_lahir" placeholder="" type="Date"
                                            value="{{ old('tanggal_lahir') }}"
                                            class="@error('tanggal_lahir') border-red-500 @enderror  text-md block px-3 py-2  rounded-lg w-full 
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none ">

                                        @error('tanggal_lahir')
                                            <span class="px-1 text-sm text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- email --}}
                                    <div class="py-2">
                                        <span class="px-1 text-sm text-gray-600">Email</span>
                                        <input name="email" placeholder="" type="email" value="{{ old('email') }}"
                                            class="@error('email') border-red-500 @enderror text-md block px-3 py-2  rounded-lg w-full 
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">

                                        @error('email')
                                            <span class="px-1 text-sm text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- no. telepon --}}
                                    <div class="py-2">
                                        <span class="px-1 text-sm text-gray-600">Nomor Telepon</span>
                                        <input name="no_telepon" placeholder="" type="tel"
                                            value="{{ old('no_telepon') }}"
                                            class="@error('no_telepon') border-red-500 @enderror text-md block px-3 py-2  rounded-lg w-full 
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">

                                        @error('no_telepon')
                                            <span class="px-1 text-sm text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- password --}}
                                    <div class="py-2">
                                        <span class="px-1 text-sm text-gray-600">Password</span>
                                        <div class="relative">
                                            <input name="password" placeholder="" type='password'
                                                class=" @error('password') border-red-500 @enderror text-md block px-3 py-2 rounded-lg w-full 
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                focus:placeholder-gray-500
                focus:bg-white 
                focus:border-gray-600  
                focus:outline-none">
                                            @error('password')
                                                <span class="px-1 text-sm text-red-600">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>

                                    {{-- password confirmation --}}
                                    <div class="py-2">
                                        <span class="px-1 text-sm text-gray-600">Confirm Password</span>
                                        <div class="relative">
                                            <input placeholder="" name="password_confirmation" type='password'
                                                class="text-md block px-3 py-2 rounded-lg w-full 
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                focus:placeholder-gray-500
                focus:bg-white 
                focus:border-gray-600  
                focus:outline-none">

                                        </div>
                                    </div>


                                    <button
                                        class="mt-3 text-lg font-semibold 
                bg-blue-600 w-full text-white rounded-lg
                px-6 py-3 block shadow-xl hover:text-white hover:bg-blue-700">
                                        Sign Up
                                    </button>

                                    <div class="my-3 ">

                                        <p class="">Already have an account ? Sign In
                                            <span class="text-blue-700">
                                                <a href="{{ route('login') }}">
                                                    Here
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
