<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: 100vh;">
    <!-- Brand Logo -->
    <a href="{{ route('employee.homepage') }}" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Task Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('employee.profile') }}" class="d-block">Nguyễn Hữu Khải</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('employee.homepage') }}" class="nav-link homepage-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                    <a href="{{ route('employee.job') }}" class="nav-link job-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Công việc
                        </p>
                    </a>
                    <a href="{{ route('employee.punish') }}" class="nav-link punish-link">
                        <i class="nav-icon fas fa-bug"></i>
                        <p>
                            Xử phạt
                        </p>
                    </a>
                    <a href="{{ route('employee.kpi') }}" class="nav-link kpi-link">
                        <i class="nav-icon fas fa-sign-language"></i>
                        <p>
                            KPI
                        </p>
                    </a>
                    <a href="{{ route('employee.checkin') }}" class="nav-link checkin-link">
                        <i class="nav-icon fas fa-check-circle"></i>
                        <p>
                            Bảng công
                        </p>
                    </a>
                    <a href="{{ route('employee.salary') }}" class="nav-link salary-link">
                        <i class="nav-icon fas fa-money-check"></i>
                        <p>
                            Bảng lương
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
