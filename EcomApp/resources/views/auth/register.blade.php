<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | Registration Page </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{ url('/') }}" class="h1"><b>{{ config('app.name') }}</b></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{ route('register.post') }}" method="post">
               @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                @error('name')<small class="text-danger text-center">{{ $message }}</small> @enderror
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                @error('email')<small class="text-danger text-center">{{ $message }}</small> @enderror

                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
                @error('phone')<small class="text-danger text-center">{{ $message }}</small> @enderror
                <div class="input-group mb-3">
                    <select name="type" class="form-control" id="">
                        <option {{ old('type') == 'merchant' ? 'selected' : '' }} value="merchant">Merchant</option>
                        <option {{ old('type') == 'client' ? 'selected' : '' }} value="client">Client</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
                @error('type')<small class="text-danger text-center">{{ $message }}</small> @enderror
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('password')<small class="text-danger text-center">{{ $message }}</small> @enderror

                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('confirmation_password')<small class="text-danger text-center">{{ $message }}</small> @enderror

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" {{ old('terms') == 'agree' ? 'checked' : '' }} id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                        @error('terms')<small class="text-danger text-center">{{ $message }}</small> @enderror
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="login.html" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
