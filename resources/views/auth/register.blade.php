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

                                    {{-- username --}}
                                    <div class="py-2">
                                        <span class="px-1 text-sm text-gray-600">Username</span>
                                        <input name="username" placeholder="" type="text"
                                            value="{{ old('username') }}"
                                            class="@error('username') border-red-500 @enderror  text-md block px-3 py-2  rounded-lg w-full 
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none ">

                                        @error('username')
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

                                    {{-- password --}}
                                    <div class="py-2">
                                        <span class="px-1 text-sm text-gray-600">Password</span>
                                        <div class="relative">
                                            <input name="password" placeholder="" type='password'
                                                class="@error('passsword') border-red-500 @enderror text-md block px-3 py-2 rounded-lg w-full 
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
                                    <div class="flex justify-between"> <label
                                            class="block text-gray-500 font-bold my-4"><a href="#"
                                                class="cursor-pointer tracking-tighter text-black border-b-2 border-gray-200 hover:border-gray-400"><span>Forgot
                                                    Password?</span></a></label></div>

                                    <button
                                        class="mt-3 text-lg font-semibold 
                bg-gray-800 w-full text-white rounded-lg
                px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                                        Sign Up
                                    </button>
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
