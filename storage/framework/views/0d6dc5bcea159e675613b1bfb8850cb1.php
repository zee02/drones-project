<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>SkyDri</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" href="<?php echo e(asset('img/logo.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('img/logo.png')); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo e(asset('img/logo.png')); ?>">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <script src="<?php echo e(asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')); ?>"></script>

    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>
    <div class="wrap">
        <?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH B:\Projetos\website\drones-project\resources\views/layouts/app.blade.php ENDPATH**/ ?>