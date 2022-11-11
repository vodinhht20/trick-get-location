<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ asset('/') }}assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">Gecko</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                    Admin</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                        <i class="ri-dashboard-line"></i>
                        <span>Thống kê</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('test') }}" class="waves-effect {{ Request::routeIs('test') ? 'active' : '' }}">
                        <i class="ri-store-line"></i>
                        <span>test</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('historyPay') }}" class="waves-effect {{ Request::routeIs('historyPay') ? 'active' : '' }}">
                        <i class="ri-history-line"></i><span class="badge rounded-pill bg-success float-end">1</span>
                        <span>Lịch sử giao dịch</span>
                    </a>
                </li>

                <li class="menu-title">Khách hàng</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Quản lý thành viên</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login.html">Login</a></li>
                        <li><a href="auth-register.html">Register</a></li>
                        <li><a href="auth-recoverpw.html">Recover Password</a></li>
                        <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
