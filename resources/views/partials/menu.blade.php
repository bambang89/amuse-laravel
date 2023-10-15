<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px; background-color: #445799;">
    <!-- Brand Logo -->
    <a href="{{ route("admin.home") }}" class="brand-link logo-switch">
        <!-- <img src={{url('/public/img/icon/AdminLTELogo.png')}} alt="AdminLTE Docs Logo Small" class="brand-image-xl logo-xs"> -->
        <img src={{url('/public/img/amuse_logo.png')}} width="200" height="" alt=""/>
        <!-- <span class="brand-text font-weight-light">AMUSE</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route("admin.home") }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>{{ trans('global.dashboard') }}</p>
                    </a>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                <span>{{ trans('global.userManagement.title') }}</span>
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                        <p style="margin-left: 20px;">
                                            <i class="nav-icon fas fa-unlock-alt"></i>
                                            <span>{{ trans('global.permission.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                        <p style="margin-left: 20px;">
                                            <i class="nav-icon fas fa-briefcase"></i>
                                            <span>{{ trans('global.role.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                        <p style="margin-left: 20px;">
                                            <i class="nav-icon fas fa-user"></i>
                                            <span>{{ trans('global.user.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('product_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                <span>{{ trans('global.product.title') }}</span>
                            </p>
                        </a>
                    </li>
                @endcan

                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/banner*') ? 'menu-open' : '' }} {{ request()->is('admin/speaker*') ? 'menu-open' : '' }} {{ request()->is('admin/about*') ? 'menu-open' : '' }} {{ request()->is('admin/member*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                <span>{{ trans('global.settings.title') }}</span>
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route("admin.banner.index") }}" class="nav-link {{ request()->is('admin/banner') || request()->is('admin/banner/*') ? 'active' : '' }}">
                                    <p style="margin-left: 20px;">
                                        <i class="nav-icon far fa-image"></i>
                                        <span>{{ trans('global.banner.title') }}</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("admin.about.index") }}" class="nav-link {{ request()->is('admin/about') || request()->is('admin/about/*') ? 'active' : '' }}">
                                    <p style="margin-left: 20px;">
                                        <i class="nav-icon fas fa-briefcase"></i>
                                        <span>{{ trans('global.about_us.title') }}</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("admin.speaker.index") }}" class="nav-link {{ request()->is('admin/speaker') || request()->is('admin/speaker/*') ? 'active' : '' }}">
                                    <p style="margin-left: 20px;">
                                        <i class="nav-icon fas fa-user"></i>
                                        <span>{{ trans('global.speak.title') }}</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("admin.member.index") }}" class="nav-link {{ request()->is('admin/member') || request()->is('admin/member/*') ? 'active' : '' }}">
                                    <p style="margin-left: 20px;">
                                        <i class="nav-icon fas fa-user"></i>
                                        <span>Member List</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                <li class="nav-item ">
                    <!-- <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>{{ trans('global.logout') }}</p>
                    </a> -->
                    <a href="#" href="{{ url('/logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>{{ trans('global.logout') }}</p>
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="get" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>