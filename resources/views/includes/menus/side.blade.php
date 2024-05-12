<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu">
                <div class="">
                    <div class="main-menu-header">
                        {{-- {{ asset('admin/images/faq_man.png') }} --}}
                        <img class="p-2" src="{{ asset('image/banner.png') }}" alt="" style="width:100%;">
                        <div class="user-details">
                            {{-- <span id="more-details">ADMIN</span> --}}
                        </div>
                    </div>
                </div>
                <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">MENUS</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="/dashboard" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                            <span class="pcoded-mtext">Dashboard</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li>
                        <a href="f#" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="fa fa-archive"></i><b>FC</b></span>
                            <span class="pcoded-mtext">Logs</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="fa fa-list"></i><b>FC</b></span>
                            <span class="pcoded-mtext">Inventory</span>
                            <span class="pcoded-mcaret"></span>
                        </a>

                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li>
                        <a href="f#" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="fa fa-calendar"></i><b>FC</b></span>
                            <span class="pcoded-mtext">Delivery</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/permit" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
                            <span class="pcoded-mtext">Users</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="auth-normal-sign-in.html" class="waves-effect waves-dark">
                            <form method="POST" action="">
                                @csrf
                                {{-- :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();" --}}
                                <x-dropdown-link>
                                    <i class="fas fa-sign-out-alt ml-1 mr-3"></i> {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>

                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="pcoded-content">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h3 class="m-b-0 p-2 mb-2">Bike Parts Inventory</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    {{-- <a href="index.html"> <i class="fa fa-home"></i> </a> --}}
                                </li>
                                {{-- <li class="breadcrumb-item"><a href="#!">Dashboard</a> --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
