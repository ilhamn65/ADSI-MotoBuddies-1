<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motobuddies</title>
    <link rel="stylesheet" href="/css/app.css">
</head>


<nav aria-label="sr-only" id="top-navigation" class=" bg-blue-400 p-6 text-white  rounded-b-2xl ">
    <div id="notification" class="flex justify-between mb-8">




        
        <div>
            
            <?php if(!(Route::getCurrentRoute()->uri == '/')): ?>
                <a href="<?php echo e(url()->previous()); ?>">
                    <span><img src="/images/BACK.png" class="mx-auto h-4" alt="CART"></span>
                </a>
            <?php endif; ?>
        </div>

        


        <div class="flex justify-end gap-2">

            <a>
                <span><img src="/images/CART.png" class="mx-auto h-4" alt="CART"></span>
            </a>
            <a>
                <span><img src="/images/BELL.png" class="mx-auto h-4  pr-1 " alt="NOTIFICATION"></span>
            </a>
            <a>
                <span><img src="/images/MESSEGE.png" class="mx-auto h-4" alt="MSG"></span>
            </a>
        </div>



    </div>

    <?php if(auth()->guard()->check()): ?>
        <div id="search-bar">


            <p class="my-2">Selamat Datang, <?php echo e(auth()->user()->nama_lengkap); ?> !</p>
            <form action="">

                <input class="text-gray-400 py-1 px-3 w-full" type="text" name="search" placeholder="Cari sesuatu ?">
            </form>
        </div>
    <?php endif; ?>





</nav>

<body class="bg-gray-100  max-w-sm mx-auto">

    <?php echo $__env->yieldContent('content'); ?>


</body>



<nav aria-label="sr-only" id="bottom-navigation"
    class="fixed inset-x-0 bottom-0 max-w-sm mx-auto py-2 px-3 block   bg-white shadow">
    <div id="tabs" class="flex justify-between gap-4">

        <a href="<?php echo e(route('dashboard')); ?>"
            class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
            
            <span class="tab tab-home block text-xs">
                <img src="/images/HOME.png" class="mx-auto h-6 " alt="HOME">Home
            </span>
        </a>
        <a href="<?php echo e(route('orderHistory')); ?>"
            class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

            <span class="tab tab-kategori block text-xs">
                <img src="/images/HISTORY.png" class="mx-auto h-6 " alt="HISTORY"> History
            </span>
        </a>
        <a href="#"
            class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

            <span class="tab tab-explore block text-xs">
                <img src="/images/EMERGENCY.png" class="mx-auto h-6 " alt="EMERGENCY"> Emergency
            </span>
        </a>
        <a href="#"
            class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

            <span class="tab tab-whishlist block text-xs">
                <img src="/images/CONTACT.png" class="mx-auto h-6 " alt="CONTACT US"> Call Us
            </span>
        </a>
        <a href="<?php echo e(route('profile')); ?>"
            class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

            <span class="tab tab-account block text-xs">
                <img src="/images/PROFILE.png" class="mx-auto h-6 " alt="PROFILE"> Profile
            </span>
        </a>
    </div>
</nav>

</html>
<?php /**PATH D:\Web development\motobuddies-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>