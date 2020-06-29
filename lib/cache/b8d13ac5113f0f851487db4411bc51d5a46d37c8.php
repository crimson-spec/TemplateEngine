
<?php $__env->startSection('title', 'ADICIONAR PRODUTOS'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo e($success ?? ''); ?>


    <?php if(isset($data)): ?>
        <form name="form1" id="form1" method="POST" action="<?php echo DIRPAGE.'produto_edit/'.$data[0]->id; ?>">
    <?php else: ?>
        <form name="form1" id="form1" method="POST" action="<?php echo DIRPAGE.'produto_create'; ?>">
    <?php endif; ?>
            <input type="text" name="name" id="name" placeholder="Nome:" value="<?php echo e($data[0]->name ?? ''); ?>" required>
            <input type="text" name="price" id="price" placeholder="Preço:" value="<?php echo e($data[0]->price ?? ''); ?>" required>
            <select name="cat" id="cat">
                <option value="1">Frios</option>
                <option value="2">Mercearia</option>
                <option value="3">Padaria</option>
                <option value="4">Bebidas</option>
                <option value="5">Limpeza</option>
                <option value="6">Frutas</option>
            </select>
    <?php if(isset($data)): ?>
        <input type="submit" value="Editar">
    <?php else: ?>
    <input type="submit" value="Cadastrar">
    <?php endif; ?>            
        </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TemplateEngine\views/produto_create.blade.php ENDPATH**/ ?>