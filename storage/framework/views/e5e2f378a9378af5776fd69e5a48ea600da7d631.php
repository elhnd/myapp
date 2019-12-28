<?php $__env->startSection('content'); ?>
    <h1><?php echo e($client->name); ?></h1>
    <a href="/clients/<?php echo e($client->id); ?>/edit" class="btn btn-secondary my-3">Editer</a>
    <form action="/clients/<?php echo e($client->id); ?>" method="post" style="display:inline;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
    <hr>
    <p><strong>Email :</strong><?php echo e($client->email); ?></p>
    <p><strong>Entreprise :</strong><?php echo e($client->entreprise->name); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eldji/myapp/resources/views/clients/show.blade.php ENDPATH**/ ?>