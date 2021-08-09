<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('admin/') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>T</b>W</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Tung</b>Watch</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#"  data-toggle="push-menu" role="button">
            <i class="fas fa-bars" style="color:white;font-size:20px;padding:15px 10px;"></i>
        </a>
    </nav>
</header>
<!-- Sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../assets/images/Banner_4.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>@if (Auth::check()) 
                    {{ Auth::user()->name  }}
                   @endif
                </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">LAOYOUT ADMIN</li>

            <li>
                <a href="{{ url('admin/brand') }}">
                    <i class="fa fa-th"></i> <span>Brands</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/watch') }}">
                    <i class="fa fa-th"></i> <span>Watches</span>
                </a>
            </li>
            <li>
                <a href="index.php?controller=user">
                    <i class="fa fa-th"></i> <span>Users</span>
                </a>
            </li>
            <li>
                <a href="index.php?controller=order">
                    <i class="fa fa-th"></i> <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="index.php?controller=banner">
                    <i class="fa fa-code"></i> <span>Banners</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/logout') }}">
                    <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>