<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'BanSos' }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">

    @stack('css')
    <link rel="stylesheet" href="/notif/dist/css/iziToast.min.css">
    <script src="/notif/dist/js/iziToast.min.js" type="text/javascript"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light"
            style="box-shadow: 0px 1px 10px silver;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> --}}
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->


        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="/logo/barito.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
                <span class="brand-text font-weight-light">

                    {{Auth::user()->name}}

                </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        @guest

                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fa fa-user-lock"></i>
                                <p>
                                    Log Out
                                </p>
                            </a>
                        </li>
                        @endguest

                        @if (Auth::user()->roles == 'superadmin')

                        <li class="nav-item">
                            <a href="/superadmin" class="nav-link {{request()->is('superadmin') ? 'active':''}}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    DASHBOARD
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/superadmin/user"
                                class="nav-link {{request()->is('superadmin/user*') ? 'active':''}}">
                                <i class="nav-icon fas fa-check"></i>
                                <p>
                                    USER
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/skpd"
                                class="nav-link {{request()->is('superadmin/skpd*') ? 'active':''}}">
                                <i class="nav-icon fas fa-check"></i>
                                <p>
                                    SKPD
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/verifikator"
                                class="nav-link {{request()->is('superadmin/verifikator*') ? 'active':''}}">
                                <i class="nav-icon fas fa-check"></i>
                                <p>
                                    VERIFIKATOR
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/hibah"
                                class="nav-link {{request()->is('superadmin/hibah*') ? 'active':''}}">
                                <i class="nav-icon fas fa-check"></i>
                                <p>
                                    HIBAH/BANSOS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/penerima"
                                class="nav-link {{request()->is('superadmin/penerima*') ? 'active':''}}">
                                <i class="nav-icon fas fa-check"></i>
                                <p>
                                    PENGAJUAN
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/verifikasi"
                                class="nav-link {{request()->is('superadmin/verifikasi*') ? 'active':''}}">
                                <i class="nav-icon fas fa-check"></i>
                                <p>
                                    VERIFIKASI
                                </p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="/superadmin/verifikasi"
                                class="nav-link {{request()->is('superadmin/verifikasi*') ? 'active':''}}">
                                <i class="nav-icon fas fa-check"></i>
                                <p>
                                    VERIFIKASI PENERIMA
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/distribusi"
                                class="nav-link {{request()->is('superadmin/distribusi*') ? 'active':''}}">
                                <i class="nav-icon fas fa-check"></i>
                                <p>
                                    DISTRIBUSI BANTUAN
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/pengaduan"
                                class="nav-link {{request()->is('superadmin/pengaduan*') ? 'active':''}}">
                                <i class="nav-icon fas fa-check"></i>
                                <p>
                                    PENGADUAN
                                </p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="/superadmin/laporan"
                                class="nav-link {{request()->is('superadmin/laporan*') ? 'active':''}}">
                                <i class="nav-icon fas fa-check"></i>
                                <p>
                                    LAPORAN
                                </p>
                            </a>
                        </li>
                        @else

                        <li class="nav-item">
                            <a href="/user/dashboard"
                                class="nav-link {{request()->is('user/dashboard') ? 'active':''}}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    DASHBOARD
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user/ajukan" class="nav-link {{request()->is('user/ajukan*') ? 'active':''}}">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Pengajuan
                                </p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="/user/pengaduan"
                                class="nav-link {{request()->is('user/pengaduan*') ? 'active':''}}">
                                <i class="nav-icon fas fa-comment"></i>
                                <p>
                                    Pengaduan
                                </p>
                            </a>
                        </li> --}}
                        @endif

                        <li class="nav-item">
                            <a href="/logout" class="nav-link" onclick="return confirm('Yakin ingin keluar?');">
                                <i class="nav-icon fas fa-arrow-right"></i>
                                <p>
                                    Log out
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <br />

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">

        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/dist/js/adminlte.min.js"></script>

    @stack('js')
    <script>
        function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
    </script>
    <script type="text/javascript">
        @include('layouts.notif')
    </script>
</body>

</html>