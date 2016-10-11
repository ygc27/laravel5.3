<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo e(url('admin/dashboard')); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>PJÁ</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b> PESQUISE JÁ</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="zmdi zmdi-account-o zmdi-hc-lg"></i>
                        <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <i class="zmdi zmdi-account-o zmdi-hc-5x" style="color: #fff;"></i>

                            <p>
                                <?php echo e(Auth::user()->name); ?>

                                <?php
                                $data_cadastro = strtotime(Auth::user()->created_at)
                                ?>
                                <small>Membro desde: <?php echo e(date('d/m/Y', $data_cadastro)); ?></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo e('perfil'); ?>" class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo e(url('/logout')); ?>" class="btn btn-default btn-flat">Sair</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
    </nav>
</header>