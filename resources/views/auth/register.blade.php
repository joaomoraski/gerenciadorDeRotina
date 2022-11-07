<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('vendor/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/plugins/sweetalert2/sweetalert2.css')}}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{ route('home') }}" class="h2">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Registre-se</p>

            <form action="{{ route('register.create') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                           placeholder="Nome completo" value="{{ old('name') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                           placeholder="Email" value="{{ old('email') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                           placeholder="Senha" value="{{ old('password') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                           name="password_confirmation" placeholder="Confirme a senha"
                           value="{{ old('password_confirmation') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="{{ route('login') }}" class="text-center">Já tenho uma conta cadastrada</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('vendor/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('vendor/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script>
    $(function () {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        // $('.swalDefaultSuccess').click(function() {
        //     Toast.fire({
        //         icon: 'success',
        //         title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        //     })
        // });
        // $('.swalDefaultInfo').click(function() {
        //     Toast.fire({
        //         icon: 'info',
        //         title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        //     })
        // });

        @if ($errors->any())
        Toast.fire({
            icon: 'error',
            title: '{{ implode(". ", $errors->all() )}}'
        })
        @endif
        {{--        @error('login')--}}
        {{--        // $('.swalDefaultError').click(function () {--}}
        {{--        Toast.fire({--}}
        {{--            icon: 'error',--}}
        {{--            title: '{{ $message }}'--}}
        {{--        })--}}
        {{--        // });--}}
        {{--        @enderror--}}
        // $('.swalDefaultWarning').click(function() {
        //     Toast.fire({
        //         icon: 'warning',
        //         title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        //     })
        // });
        // $('.swalDefaultQuestion').click(function() {
        //     Toast.fire({
        //         icon: 'question',
        //         title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        //     })
        // });
    });
</script>
</body>
</html>
