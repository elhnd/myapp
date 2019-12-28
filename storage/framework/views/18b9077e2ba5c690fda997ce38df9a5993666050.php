<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Myapp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- Styles -->
    </head>
    <body>
        <div class="container">

            <nav class="nav">
                <a class="nav-link active" href="/">Acceuil</a>
                <a class="nav-link" href="a-propos">A propos</a>
                <a class="nav-link" href="/contact">Contactez-nous</a>
                <a class="nav-link" href="/clients">Clients</a>
            </nav>
            <?php if(session()->has('message')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session()->get('message')); ?>

            </div>
            <?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>

        </div>
    </body>
</html><?php /**PATH /home/eldji/myapp/resources/views/layout.blade.php ENDPATH**/ ?>