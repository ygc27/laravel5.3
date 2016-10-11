<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <span style="color: #fff;"><i class="zmdi zmdi-account-o zmdi-hc-4x"></i></span>
            </div>
            <div class="pull-left info">
                <p><?php echo e(Auth::user()->name); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="<?php if ($pag_nome == 'dashboard') echo 'active'; ?>">
                <a href="<?php echo e(url('admin/dashboard')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Painel de Controle</span>
                </a>
            </li>
          
            <li class="">
                <a href="<?php echo e(url('/logout')); ?>">
                    <i class="fa fa-power-off"></i>
                    <span>Sair</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>