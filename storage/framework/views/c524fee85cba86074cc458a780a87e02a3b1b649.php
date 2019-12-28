<?php $__env->startSection('content'); ?>
<h1>Créer un nouveau client</h1>
<form action="/clients" method="post">
   
    <?php echo $__env->make('includes.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button type="submit" class="btn btn-primary">Ajouter le client</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eldji/myapp/resources/views/clients/create.blade.php ENDPATH**/ ?>