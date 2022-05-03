<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motobuddies</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body class="bg-blue-400">
    <nav class="flex justify-between bg-white p-6 ">
        
        <ul class="flex items-center"><li>
            <a class="p-3">Home</a>
        </li>
        <li>
            <a class="p-3">Dashboard</a>
        </li>
        <li>
            <a class="p-3">Our Products</a>
        </li>
        <li>
            <a class="p-3">Our Services</a>
        </li></ul>
        <ul class="flex items-center"><li>
            <a class="p-3">Arrafii Alfa</a>
        </li>
        <li>
            <a class="p-3">Your Orders</a>
        </li>
        <li>
            <a class="p-3">Contact Support</a>
        </li>
        <li>
            <a class="p-3">Logout</a>
        </li></ul>
        
       
           
                
            
    </nav>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH D:\Web development\motobuddies-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>