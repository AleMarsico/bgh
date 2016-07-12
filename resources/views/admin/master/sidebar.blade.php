<section class="sidebar">
    <ul class="sidebar-menu">
        <li class="header">SideBar</li>
        <li class="treeview">
            <a href="{{ url('admin') }}">
                <i class="ion ion-easel"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="ion ion-ios-people"></i>
                <span>Users</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('admin.users', ['type' => 'approved']) }}"><i class="fa fa-circle-o"></i> All Users</a></li>
                <li><a href="{{ route('admin.users', ['type' => 'featured']) }}"><i class="fa fa-circle-o"></i> Featured Users</a></li>
                <li><a href="{{ route('admin.users', ['type' => 'approvalRequired']) }}"><i class="fa fa-circle-o"></i> Require Approval</a></li>
                <li><a href="{{ route('admin.users', ['type' => 'banned']) }}"><i class="fa fa-circle-o"></i> Banned Users</a></li>
                <li><a href="{{ route('admin.users.add') }}"><i class="fa fa-circle-o"></i> Add Real/Fake User</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="ion ion-cube"></i>
                <span>Products</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('admin.productcategories', ['type' => 'approved']) }}"><i class="fa fa-sitemap"></i> Categories</a></li>
                <li><a href="{{ route('admin.products', ['type' => 'approved']) }}"><i class="fa fa-reorder"></i> All</a></li>
                <li><a href="{{ route('admin.products', ['type' => 'featured']) }}"><i class="fa fa-reorder"></i> Featured</a></li>
                <li><a href="{{ route('admin.products', ['type' => 'approvalRequired']) }}"><i class="fa fa-reorder"></i> Require Approval</a></li>
                <li><a href="{{ route('admin.products.bulkupload', ['type' => 'approvalRequired']) }}"><i class="fa fa-reorder"></i> Bulk Upload</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="ion ion-chatboxes"></i>
                <span>Comments</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('admin.comments', ['type' => 'approved']) }}"><i class="fa fa-circle-o"></i> All Comments</a></li>
                <li><a href="{{ route('admin.products', ['type' => 'featured']) }}"><i class="fa fa-circle-o"></i> Featured Comments</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="ion ion-document-text"></i>
                <span>Blogs</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('admin.blogs') }}"><i class="fa fa-circle-o"></i> All Blogs</a></li>
                <li><a href="{{ route('admin.blogs.create') }}"><i class="fa fa-circle-o"></i> Create New</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="{{ route('admin.reports') }}">
                <i class="ion ion-ios-pie"></i>
                <span>Reports</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="ion ion-settings"></i>
                <span>Site Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('admin.settings.details') }}"><i class="fa fa-circle-o"></i>Details</a></li>
                <li><a href="{{ route('admin.settings.limits') }}"><i class="fa fa-circle-o"></i>Limits</a></li>
                <li><a href="{{ route('admin.settings.cache') }}"><i class="fa fa-circle-o"></i>Cache</a></li>
                <li><a href="{{ route('admin.settings.sitemap') }}"><i class="fa fa-circle-o"></i>Sitemap</a></li>
            </ul>
        </li>
        <li class="treeview">
            <li><a href="{{ route('logout') }}">
                <i class="fa fa-sign-out"></i>
                <span>{{ t('Logout') }}</span>
            </a>
        </li>

    </ul>
</section>