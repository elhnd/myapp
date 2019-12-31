<?php $__env->startSection('content'); ?>
<h1>
    CLIENTS
</h1>

<a type="submit" href="clients/create" class="btn btn-primary my-3">Ajouter un client</a>
 
<ul>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Status</th>
                <th scope="col">Entreprise</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($client->id); ?></th>
                <td><a href="/clients/<?php echo e($client->id); ?>"><?php echo e($client->name); ?></a></td>
                    <td><?php echo e($client->status); ?></td>
                    <td><?php echo e($client->entreprise->name); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eldji/Bureau/myapp/resources/views/clients/index.blade.php ENDPATH**/ ?>