<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAFTAR</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- assets style -->
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/notif/dist/css/iziToast.min.css">
    <script src="/notif/dist/js/iziToast.min.js" type="text/javascript"></script>
</head>

<body class="hold-transition login-page" style="background-image: url('/assets/bg.jpg'); background-size: cover;">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/" class="h1">DAFTAR</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg"></p>

                <form class="form" action="/daftar" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Nama LEngkap"
                            value="{{old('name')}}" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username"
                            value="{{old('username')}}" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('username')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="password"
                            value="{{old('password')}}" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="confirm_password"
                            placeholder="confirm_password" value="{{old('confirm_password')}}" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('confirm_password')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </div>
                        <div class="col-8">
                            <a href="/login" class="btn btn-danger btn-block">Login</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/dist/js/adminlte.min.js"></script>

    <script type="text/javascript">
        @include('layouts.notif')
    </script>
</body>

</html>