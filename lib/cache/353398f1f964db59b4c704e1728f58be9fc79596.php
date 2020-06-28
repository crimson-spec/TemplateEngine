
<?php $__env->startSection('title', 'HOMEPAGE'); ?>
<?php $__env->startSection('content'); ?>
    <h1>MY FIRST SECTION TEMPLATE</h1>
    Bem vindo <?php echo e($name); ?> <br>
    <a href='<?php echo DIRPAGE."produto/geladeira/consul"; ?>'>Geladeira Consul</a> <br>
    <a href="<?php echo DIRPAGE.'contato'; ?>">Fale Conosco</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TemplateEngine\views/home.blade.php ENDPATH**/ ?>