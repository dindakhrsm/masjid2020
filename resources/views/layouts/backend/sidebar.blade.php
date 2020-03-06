<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src={{asset("backend/img/muslim-man-160x160.png")}} class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                <a href="{{url('/home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil"></i>
                    <span>Postingan</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('backend.blog.index')}}"><i class="fa fa-circle-o"></i> Semua Postingan </a></li>
                    <li><a href="{{route('backend.blog.create')}}"><i class="fa fa-circle-o"></i> Tambah Baru </a></li>
                </ul>
            </li>

            <li><a href="{{route('backend.categories.index')}}"><i class="fa fa-folder"></i> <span>Kategori</span></a></li>

            <li><a href="{{route('backend.users.index')}}"><i class="fa fa-users"></i> <span>Users</span></a></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i>
                    <span>Laporan Keuangan</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Laporan Mingguan </a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Laporan Bulanan </a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Laporan Tahunan </a></li>
                </ul>
            </li>
    </section>
    <!-- /.sidebar -->
</aside>