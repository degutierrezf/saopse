<header class="main-header">

    <!-- Logo -->
    <a href="<?php echo e(url('/home')); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>CL</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SAOPSE</b> Chile</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"><?php echo e(trans('adminlte_lang::message.togglenav')); ?></span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <?php if(Auth::guest()): ?>
                    <li><a href="<?php echo e(url('/login')); ?>">Iniciar Sesión</a></li>
                <?php else: ?>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="<?php echo e(asset('/img/user2-160x160.jpg')); ?>" class="user-image" alt="User Image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?php echo e(asset('/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image" />
                                <p>
                                    <?php echo e(Auth::user()->name); ?>

                                    <small><?php echo e(trans('adminlte_lang::message.login')); ?> Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#"><?php echo e(trans('adminlte_lang::message.followers')); ?></a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#"><?php echo e(trans('adminlte_lang::message.sales')); ?></a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#"><?php echo e(trans('adminlte_lang::message.friends')); ?></a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat"><?php echo e(trans('adminlte_lang::message.profile')); ?></a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo e(url('/logout')); ?>" class="btn btn-default btn-flat"><?php echo e(trans('adminlte_lang::message.signout')); ?></a>
                                </div>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
    </nav>
</header>