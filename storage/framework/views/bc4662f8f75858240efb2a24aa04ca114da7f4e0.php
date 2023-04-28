<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?> :: Объявления</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="/styles/main.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <a href="<?php echo e(route('index')); ?>" class="navbar-brand mr-auto ">Главная</a>
            <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(route('register')); ?>" class="nav-item nav-link ">Регистрация</a>
            <a href="<?php echo e(route('login')); ?>" class="nav-item nav-link">Вход</a>
            <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('home')); ?>" class="nav-item nav-link">Мои объявления</a>
            <form action="<?php echo e(route('logout')); ?>" method="POST" class="form-inline">
                <?php echo csrf_field(); ?>
                <input type="submit" class="btn btn-danger" value="Выход">
            </form>
            <?php endif; ?>
        </nav>
        <h1 class="my-3 text-center">Объявления</h1>
        <?php echo $__env->yieldContent('main'); ?>
    </div>
</body>

</html><?php /**PATH C:\OSPanel\domains\work\projects\bboard\resources\views/layouts/base.blade.php ENDPATH**/ ?>