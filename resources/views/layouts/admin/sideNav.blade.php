<aside class="main-sidebar">
    <!-- sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel text-center">
            <div class="image">
                {{--<img src="{{@asset('admin/assets/dist/img/user2-160x160.png')}}" class="img-circle" alt="User Image">--}}
            </div>
            <div class="info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="/admin/category"><i class="ti-home"></i> <span>Manage Categories</span></a>
            </li>
            <li>
                <a href="/admin/subCategory"><i class="ti-pencil-alt"></i> <span>Manage Sub Categories</span></a>
            </li>
            <li>
                <a href="/admin/variations"><i class="ti-archive"></i> <span>Manage Variations</span></a>
            </li>
            <li>
                <a href="/admin/products"><i class="ti-package"></i> <span>Manage Products</span></a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="ti-layers"></i>
                    <span>Manage Orders</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/instantOrders">Instant Orders</a></li>
                    <li><a href="/admin/scheduledOrders">Scheduled Orders</a></li>
                </ul>
            </li>
        </ul>
    </div> <!-- /.sidebar -->
</aside>