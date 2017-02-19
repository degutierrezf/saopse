<?php $__env->startSection('htmlheader_title'); ?>
    Acceso
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <center><img src="/img/logo_saopse.png" alt=""></center>
            <a href="<?php echo e(url('/home')); ?>"><p>Gestor de Accidentes e Incidentes</p></a>
        </div><!-- /.login-logo -->

    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> <?php echo e(trans('adminlte_lang::message.someproblems')); ?><br><br>
            <ul>
                <?php foreach($errors->all() as $error): ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="login-box-body">


    <form action="<?php echo e(url('/login')); ?>" method="post">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="<?php echo e(trans('adminlte_lang::message.email')); ?>" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="<?php echo e(trans('adminlte_lang::message.password')); ?>" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <button type="submit" class="btn btn-success btn-block btn-flat">Ingresar</button>
            </div><!-- /.col -->
        </div>
    </form>
        <br>
    <a href="<?php echo e(url('/password/reset')); ?>">¿Olvidó su clave?</a><br>
    <a href="<?php echo e(url('/register')); ?>" class="text-center">Soy un nuevo Usuario</a>

</div><!-- /.login-box-body -->

</div><!-- /.login-box -->


        <center><strong>&copy; 2017 <a href="http://www.consultorait.cl">Consultora Informática Gutiérrez & Gutiérrez Ltda</a>.</strong></center>

    <?php echo $__env->make('layouts.partials.scripts_auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>