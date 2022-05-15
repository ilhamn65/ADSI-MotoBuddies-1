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
                            <img class="mx-auto" src="/images/LOGO.png" alt="logo">


                            <form action="{{ route('login') }}" method="post" class="mt-8">
                                @csrf
                                <div class="mx-auto max-w-lg ">

                                    @if (session('status'))
                                        <div class="bg-red-500 p-2 text-center  text-white">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <div class="py-2">
                                        <span class="px-1 text-sm text-gray-600">Email</span>
                                        <input name="email" placeholder="" type="email"
                                            class=" @error('email') border-red-500 @enderror text-md block px-3 py-2  rounded-lg w-full 
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">

                                        @error('email')
                                            <span class="px-1 text-sm text-red-600">{{ $message }}</span>
                                        @enderror

                                    </div>

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

                                    <div class="flex justify-between">
                                        <label class="block text-gray-500 font-bold my-4">
                                            <input name="remember" type="checkbox" class="leading-loose text-pink-600">
                                            <span class="py-2 text-sm text-gray-600 leading-snug">
                                                Remember Me
                                            </span>
                                        </label>


                                        <label class="block text-gray-500 font-bold my-4">
                                            <a href="{{route ('forgotpassword')}}"
                                                class="cursor-pointer tracking-tighter text-black border-b-2 border-gray-200 hover:border-gray-400">
                                                <span>
                                                    Forgot Password?
                                                </span>
                                            </a>
                                        </label>
                                    </div>
                                    <button
                                        class="mt-3 text-lg font-semibold 
                                            bg-gray-800 w-full text-white rounded-lg
                                            px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                                        Sign In
                                    </button>

                                    <div class="my-3 ">

                                        <p class="">Do not have an account ? Register
                                            <span class="text-blue-700">
                                                <a href="{{ route('register') }}">
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
