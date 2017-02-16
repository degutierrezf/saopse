<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <?php if(! Auth::guest()): ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo e(asset('/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p><?php echo e(Auth::user()->name); ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(trans('adminlte_lang::message.online')); ?></a>
                </div>
            </div>
        <?php endif; ?>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menú Principal</li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Accidentes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/Accidentes/Nuevo">Nuevo</a></li>
                    <li><a href="#">Listar</a></li>
                </ul>
            </li>

                        <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Incidentes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/Incidentes/Nuevo">Nuevo</a></li>
                    <li><a href="/Incidentes/Mostrar">Listar</a></li>
                </ul>
            </li>

            <li class="header">Menú Gestión</li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>General</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Gestión Aseguradoras</a></li>
                    <li><a href="#">E</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
