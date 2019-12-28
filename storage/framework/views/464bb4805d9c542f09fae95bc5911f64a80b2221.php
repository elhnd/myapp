<?php $__env->startSection('content'); ?>

<h1>Editer le profil de <?php echo e($client->name); ?></h1>

<form action="/clients/<?php echo e($client->id); ?>" method="POST">
    <?php echo method_field('PATCH'); ?>
    <?php echo $__env->make('includes.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button type="submit" class="btn btn-primary">Sauvegarder les informations</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eldji/myapp/resources/views/clients/edit.blade.php ENDPATH**/ ?>