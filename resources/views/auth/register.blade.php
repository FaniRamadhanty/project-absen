<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Register</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>

<body class="bg-default">
    <!-- Navbar -->

    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Create an account</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <!-- Table -->
            <div class="row justify-content-center">
              <div class="col-lg-6 col-md-8 mx-auto">
                    <div class="card bg-secondary border-0">
                        <div class="card-header bg-transparent pb-5">
                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center text-muted mb-4">
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf
                                </div>
                                <form role="form">
                                    <div class="form-group">
                                        <p><i class="fa fa-user"></i> Username</p>
                                        <input placeholder="Name" type="text" name="name"
                                            class="form-control  @error('name') is-invalid @enderror">
                                    </div>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="form-group">
                                        <p><i class="fa fa-envelope"></i> Email</p>
                                        <input placeholder="Email" type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror">
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="form-group">
                                        <p><i class="fa fa-key"></i> Password</p>
                                        <input placeholder="Password" type="password" name="password"
                                            class="form-control @error('email') is-invalid @enderror">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <br>
                                        <div class="form-group">
                                            <input placeholder="Password Retype" type="password" name="password_confirmation"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <p><i class="fa fa-address-book"></i> Role</p>
                                            <input placeholder="Email" type="text" name="role" value="petugas" readonly
                                                class="form-control @error('role') is-invalid @enderror">
                                        </div>
                                        @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Register
                                        </button>
                                        <hr>
                                        <p class="text-center">Sudah punya akun silahkan <a href="{{ url('login') }}">Login
                                                Disini!</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Argon Scripts -->
    </div>
</body>

</html>
