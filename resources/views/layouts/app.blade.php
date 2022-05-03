<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motobuddies</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-200">
    <section id="top-navigation" class="fixed inset-x-0 z-10 bg-blue-400 p-6 text-white  rounded-b-2xl ">
        <div id="notification" class="flex justify-end gap-2">

            <a>
                <span>Cart</span>
            </a>
            <a>
                <span>Notif</span>
            </a>
            <a>
                <span>Mssge</span>
            </a>

        </div>

        <div id="search-bar">
            <div>Selamat Datang, Justin !</div>
            <form action="">

                <input class="text-gray-400 py-1 px-3 w-full" type="text" name="search" value="Cari Sesuatu ?">
            </form>
        </div>



    </section>
    @yield('content')

    <!-- component -->
    <div class="w-full h-screen">

        <nav id="bottom-navigation" class="p-6 block fixed inset-x-0 bottom-0 z-10 bg-white shadow">
            <div id="tabs" class="flex justify-between">
                <a href="#"
                    class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                    {{-- icon here --}}
                    <span class="tab tab-home block text-xs">Beranda</span>
                </a>
                <a href="#"
                    class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                    <span class="tab tab-kategori block text-xs">History</span>
                </a>
                <a href="#"
                    class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                    <span class="tab tab-explore block text-xs">Emergency</span>
                </a>
                <a href="#"
                    class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                    <span class="tab tab-whishlist block text-xs">Contact Us</span>
                </a>
                <a href=#
                    class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                    <span class="tab tab-account block text-xs">Profile</span>
                </a>
            </div>
        </nav>
    </div>

</body>

</html>
