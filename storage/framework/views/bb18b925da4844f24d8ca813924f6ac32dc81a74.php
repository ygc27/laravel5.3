<?php $__env->startSection('content'); ?>
<div class="login-box">
    <div class="login-logo">
        <img src="<?php echo e(asset('assets/img/logo.png')); ?>" class="img-responsive" />
        <a href="javascript:;"><b>Análise Dados</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg" style="font-weight: bold;">Digite seus dados de acesso</p>

        <form action="<?php echo e(url('/login')); ?>" method="post">
            <?php echo e(csrf_field()); ?>


            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">

                <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
                <?php endif; ?>

                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Senha">

                <?php if($errors->has('password')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
                <?php endif; ?>

                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Lembrar
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-key"></i> Acessar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>


        <a href="<?php echo e(url('/password/reset')); ?>" style="font-weight: bold;">Esqueci minha senha ?</a>
        &nbsp;|&nbsp;
        <a href="<?php echo e(url('/register')); ?>" style="font-weight: bold;"> Novo Cadastro</a>

        <br><br>
    </div>
    <!-- /.login-box-body -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>