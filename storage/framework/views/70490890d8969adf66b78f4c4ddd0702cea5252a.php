

<?php $__env->startSection('content'); ?>
    <div class=" p-4 ">


        <img src="/images/VOUCHER1.png" class="h-32 mx-auto MB-3" alt="VOUCHER">


        <div class="grid grid-cols-3 gap-4 text-center my-12 text-sm ">
            <a href="#"
                class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                <img src="/images/FIND.png" class="h-16 mx-auto" alt="find dealer">

                <span>Find Dealer</span>
            </a>

            <a href="<?php echo e(route('book')); ?>"
                class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                <img src="/images/BOOK.png" class="h-16 mx-auto" alt="BOOK">
                <span>Book Servis</span>
            </a>
            <a href="<?php echo e(route('products')); ?>"
                class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                <img src="/images/SPAREPARTS.png" class="h-16 mx-auto" alt="SPAREPARTS">
                <span>Spare Parts</span>
            </a>
            <a href="#"
                class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                <img src="/images/TIPS.png" class="h-16 mx-auto" alt="TIPSTRICKS">
                <span>Tips and Tricks</span>
            </a>
            <a href="<?php echo e(route('services')); ?>"
                class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                <img src="/images/SERVICES.png" class="h-16 mx-auto" alt="SERVICES">
                <span>Pilihan Servis</span>
            </a>
            <a href="<?php echo e(route('myBookings')); ?>"
                class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">

                <img src="/images/SCHEDULE.png" class="h-16 mx-auto" alt="SCHEDULE">
                <span>My Bookings</span>
            </a>






        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web development\motobuddies-app\resources\views/dashboard/index.blade.php ENDPATH**/ ?>