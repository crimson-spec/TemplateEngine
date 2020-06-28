
<?php $__env->startSection('title', 'PRODUTOS'); ?>
<?php $__env->startSection('content'); ?>
    <h1>PRODUCTS SECTION TEMPLATE</h1>
    <table>
        <tr>
            <td>NOME</td>
            <td>PREÇO</td>
            <td>AÇÃO</td>
        </tr>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produtos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($produtos->name); ?></td>
            <td><?php echo e($produtos->price); ?></td>
            <td></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TemplateEngine\views/produto.blade.php ENDPATH**/ ?>