<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin_asset/plugins/fontawesome-free/css/all.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/admin_asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin_asset/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/admin_asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/admin_asset/admin_main.css">
    @yield('custom_css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{route('main')}}" class="brand-link">
            <img src="/favicon.png" alt="AdminLTE Logo" class="brand-image" style="width: 40px;">
            <span class="brand-text font-weight-light">QazKitap</span>
        </a>
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                </div>
                <div class="info">
                    <a href="/admin" class="d-block">{{auth()->user()->name}}</a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{route('home_admin')}}" class="nav-link">
                            <i class="nav-icon fad fa-home-lg"></i>
                            <p>
                                Главная
                            </p>
                        </a>
                    </li>
                    @if (auth()->user()->hasRole('admin'))
                        <li class="nav-item">
                            <a href="{{route('unchecked_books')}}" class="nav-link ">
                                <i class="nav-icon fal fa-books-medical"></i>
{{--                                <i class="nav-icon fal fa-file-plus"></i>--}}
                                <p>
                                    Подтверждение
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('product.index')}}" class="nav-link ">
                                <i class="nav-icon fas fa-shopping-basket "></i>
                                <p>
                                    Товары
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link ">
                                <i class="nav-icon fas fa-align-left "></i>
                                <p>
                                    Категории
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('secondCategory.index')}}" class="nav-link ">
                                <i class="nav-icon fas fa-align-left "></i>
                                <p>
                                    Подкатегории
                                </p>
                            </a>
                        </li>
                    @endif
                    @if (auth()->user()->hasRole('moderator'))
                        <li class="nav-item">
                            <a href="{{route('product.create')}}" class="nav-link ">
                                <i class="nav-icon fas fa-book "></i>
                                <p>
                                    Добавить книгу
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('product.index')}}" class="nav-link ">
                                <i class="nav-icon fas fa-books "></i>
                                <p>
                                    Мои книги
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin_statistic')}}" class="nav-link ">
                                <i class="nav-icon fad fa-chart-pie"></i>
                                <p>
                                    Статистика
                                </p>
                            </a>
                        </li>
                    @endif
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="{{route('secondCategory.index')}}" class="nav-link ">--}}
                    {{--                            <i class="nav-icon fas fa-align-left "></i>--}}
                    {{--                            <p>--}}
                    {{--                                Заявки книг--}}
                    {{--                            </p>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
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


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admin_asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin_asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin_asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin_asset/dist/js/adminlte.js"></script>
<script src="/admin_asset/admin.js"></script>
@yield('admin_js')
</body>
</html>
