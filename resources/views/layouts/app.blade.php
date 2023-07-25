<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--    <link rel="stylesheet" href="{{asset('css/toastr.css')}}"/>--}}
    {{--    <script src="{{asset('js/toastr.js')}}"></script>--}}

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('vendor/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
          href="{{asset('vendor/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('vendor/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('vendor/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('vendor/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('vendor/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('vendor/plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/plugins/sweetalert2/sweetalert2.css')}}">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('vendor/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60"
             width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home')}}" class="nav-link">Home</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                   class="nav-link dropdown-toggle">{{ auth()->user()->name }}</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a class="dropdown-item" onclick="darkMode()">Dark mode</a></li>
                    <li><a class="dropdown-item" data-widget="fullscreen" href="#" role="button">Full screen</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    {{--                    <li class="dropdown-divider"></li>--}}
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link">
            <img src="{{asset('vendor/dist/img/AdminLTELogo.png')}}" alt="{{ config('app.name', 'Laravel') }} Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            {{--            <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
            {{--                <div class="image">--}}
            {{--                    <img src="{{asset('vendor/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"--}}
            {{--                         alt="User Image">--}}
            {{--                </div>--}}
            {{--                <div class="info">--}}
            {{--                    <a href="#" class="d-block">Alexander Pierce</a>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('texto.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Gerenciar textos
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="nav-icon fas fa-dumbbell"></i>
                            <p>
                                Gerenciar treinos
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('gerenciaTreino.index')}}" class="nav-link">
                                    <p>Geral</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>Cíclos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>Semanas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>Treino</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>Exercicio</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                Matriz de Eisenhower
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('atividade.geral') }}" class="nav-link">
                                    <p>Geral</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                {{--                                {{route('medidasSuplemento.index')}}--}}
                                <a href="" class="nav-link">
                                    <p>Cadastro de tarefas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                {{--                                {{route('medidasSuplemento.index')}}--}}
                                <a href="" class="nav-link">
                                    <p>Listagem</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        {{--                        {{ route('texto.index') }}--}}
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>
                                Trabalho
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="nav-icon fas fa-syringe"></i>
                            <p>
                                Gerenciar Suplementos
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('texto.index') }}" class="nav-link">
                                    <p>Geral</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                {{--                                {{route('medidasSuplemento.index')}}--}}
                                <a href="" class="nav-link">
                                    <p>Medidas</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('texto.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-blender"></i>
                            <p>
                                Gerenciar receitas
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('texto.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-film"></i>
                            <p>
                                Entreterimento
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('texto.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-graduation-cap"></i>
                            <p>
                                Gerenciar faculdade
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="nav-icon fas fa-pills"></i>
                            <p>
                                Gerenciar remedios
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('remedio.index') }}" class="nav-link">
                                    <p>Geral</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                {{--                                {{route('medidasRemedio.index')}}--}}
                                <a href="" class="nav-link">
                                    <p>Medidas</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2021 <a href="{{route('home')}}">{{ config('app.name', 'Laravel') }}</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('vendor/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('vendor/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)

    function darkMode() {
        console.log($('body').hasClass('dark-mode'));
        if ($('body').hasClass('dark-mode')) {
            $('body').removeClass('dark-mode')
        } else {
            $('body').addClass('dark-mode')
        }
    }
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('vendor/plugins/sparklines/sparkline.js')}}"></script>
<script src="{{asset('vendor/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('vendor/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('vendor/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{asset('vendor/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('vendor/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('vendor/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('vendor/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('vendor/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset('vendor/dist/js/adminlte.js')}}"></script>
<script src="{{asset('vendor/dist/js/demo.js')}}"></script>
<script src="{{asset('vendor/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('vendor/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
@yield('scripts')
</body>
</html>
