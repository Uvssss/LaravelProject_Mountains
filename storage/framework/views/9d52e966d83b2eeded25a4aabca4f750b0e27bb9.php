<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c3bf5a6575.js" crossorigin="anonymous"></script>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
    <title><?php echo e(config('app.name')); ?></title>
</head>
<body>
    <nav>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/form">FORM</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>

    <?php echo $__env->yieldContent('body'); ?>
</body>
</html>
<?php /**PATH D:\web\resources\views/wrapper.blade.php ENDPATH**/ ?>