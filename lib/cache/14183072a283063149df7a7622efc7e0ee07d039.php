
<?php $__env->startSection('title', 'PRODUTOS'); ?>
<?php $__env->startSection('content'); ?>
    <h1>PRODUCTS SECTION TEMPLATE</h1>
    <p><a href="<?php echo DIRPAGE.'produto_create'; ?>">Adicionar um produto</a></p>
    <p><?php echo e($message ?? ''); ?></p>
    <?php if(count($data)>1): ?>
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
            <td>
                <a href="<?php echo DIRPAGE.'produto/'.$produtos->id; ?>">Ler</a> |
                <a href="<?php echo DIRPAGE.'produto_edit/'.$produtos->id; ?>">Editar</a> |
                <a href="<?php echo DIRPAGE.'produto_delete/'.$produtos->id; ?>">Deletar</a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php else: ?>
        <br>
        <strong>NOME : </strong><?php echo e($data[0]->name); ?>

        <br>
        <strong>PREÇO : </strong><?php echo e($data[0]->price); ?>

        <br>
        <strong>CATEGORIA : </strong><?php echo e($data[0]->idCategory); ?>


    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TemplateEngine\views/produto.blade.php ENDPATH**/ ?>