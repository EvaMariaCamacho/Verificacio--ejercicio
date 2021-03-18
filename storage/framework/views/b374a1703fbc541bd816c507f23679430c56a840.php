;

<?php $__env->startSection('contenido'); ?>
<a href="articulos/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
<?php echo csrf_field(); ?>
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Codigo</th>
        <th scope="col">Descripción</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
        <th scope="col">Acciones</th>


    </tr>
<tbody>
    <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($articulo->id); ?></td>
        <td><?php echo e($articulo->codigo); ?></td>
        <td><?php echo e($articulo->descripcion); ?></td>
        <td><?php echo e($articulo->cantidad); ?></td>
        <td><?php echo e($articulo->precio); ?></td>
        <td>
           
            <a href="/articulos/<?php echo e($articulo->id); ?>/edit" class="btn btn-info">Editar</a> 
            
            <button class="btn btn-danger">Borrar</button> 
            



        </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>>
</thead>
</table>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nivel02\resources\views/articulo/index.blade.php ENDPATH**/ ?>