<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keuangan</title>
    <link rel="icon" type="image/png" href="templatemo_540_lava_landing_page/assets/images/logosss.png">
    <link rel="stylesheet" href="layout/src/assets/css/styles.min.css" />
    <style>
        /* Custom CSS */
        .sidebar-item .sidebar-link {
            margin-bottom: 10px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .sidebar-link:hover {
            background-color: #f0f4f8;
        }

        .aside-icon {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            margin: 20px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            background-color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .table-responsive {
            margin-top: 20px;
        }

        .pagination {
            justify-content: center;
            margin: 20px 0;
        }

        .nav-item img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <div class="scroll-sidebar" data-simplebar>
                <div class="mb-4 d-flex align-items-center justify-content-between">
                    <a href="index.html" class="text-nowrap logo-img ms-0 ms-md-1">
                        <img src="layout/src/assets/images/logos/keuangan.png" width="180" alt="">
                    </a>
                    <div class="cursor-pointer close-btn d-xl-none d-block sidebartoggler" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation -->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pb-2 mb-4">
                        <li class="nav-small-cap">
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link primary-hover-bg" href="keuangan" aria-expanded="false">
                                <span class="p-2 aside-icon bg-light-primary rounded-circle">
                                    <i class="ti ti-layout-dashboard fs-7 text-primary"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Home</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <span class="hide-menu">Peminjaman GSG</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link primary-hover-bg" href="pembayaran" aria-expanded="false">
                                <span class="p-2 aside-icon bg-light-success rounded-circle">
                                    <i class="ti ti-file-description fs-7 text-success"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Pembayaran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link primary-hover-bg" href="data_pembayaran" aria-expanded="false">
                                <span class="p-2 aside-icon bg-light-warning rounded-circle">
                                    <i class="ti ti-database fs-7 text-warning"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Data Pembayaran</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <span class="hide-menu">Auth</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link warning-hover-bg" href="/logout" aria-expanded="false">
                                <span class="p-2 aside-icon bg-light-danger rounded-circle">
                                    <i class="ti ti-login fs-7 text-danger"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <span class="notification bg-primary rounded-circle"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="px-0 navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="flex-row navbar-nav ms-auto align-items-center justify-content-end">
                            <a href="javascript:void(0)" class="btn btn-primary">
                                @if (Auth::check())
                                    {{ Auth::user()->name }}
                                @else
                                    Login
                                @endif
                            </a>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://i.pinimg.com/736x/ea/56/af/ea56af3c45db2a9bea14bf9cec3a01ff.jpg" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)" class="gap-2 d-flex align-items-center dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)" class="gap-2 d-flex align-items-center dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)" class="gap-2 d-flex align-items-center dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="./authentication-login.html" class="mx-3 mt-2 shadow-none btn btn-outline-primary d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <main class="container">
                            @if (session()->has('pesan'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                {{ session('pesan') }} </div>
                            @endif
                            @include('flash::message')
                            @yield('content')
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="boostrap/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="boostrap/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="boostrap/src/assets/js/sidebarmenu.js"></script>
    <script src="boostrap/src/assets/js/app.min.js"></script>
    <script src="boostrap/src/assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
