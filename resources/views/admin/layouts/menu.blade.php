<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
            <a href="{{url('adminpanel')}}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    {{trans('admin.dashboard')}}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('adminpanel')}}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{trans('admin.dashboard')}}</p>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->
