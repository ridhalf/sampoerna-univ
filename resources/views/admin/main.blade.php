<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
        name="viewport"
    />
    <link
        rel="icon"
        href="{{asset('assets_backend/img/logo.png')}}"
        type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="{{asset('assets_backend/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{asset('assets_backend/css/fonts.min.css')}}"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assets_backend/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_backend/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_backend/css/kaiadmin.min.css')}}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('assets_backend/css/demo.css')}}" />
    @stack('style')
</head>
<body>
<div class="wrapper">
    <!-- Sidebar -->
    @include('admin.partials.sidebar')
    <!-- End Sidebar -->

    <div class="main-panel">
        <div class="main-header">
            <div class="main-header-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="index.html" class="logo">
                        <img
                            src="{{asset('assets_backend/img/logo.png')}}"
                            alt="navbar brand"
                            class="navbar-brand"
                            height="20"
                        />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <!-- Navbar Header -->
            @include('admin.partials.navbar')
            <!-- End Navbar -->
        </div>

        @yield('content')
        @include('admin.partials.footer')
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('assets_backend/js/core/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('assets_backend/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets_backend/js/core/bootstrap.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset('assets_backend/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

<!-- Chart JS -->
<script src="{{asset('assets_backend/js/plugin/chart.js/chart.min.js')}}"></script>

<!-- jQuery Sparkline -->
<script src="{{asset('assets_backend/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>


<!-- Datatables -->
<script src="{{asset('assets_backend/js/plugin/datatables/datatables.min.js')}}"></script>

<!-- Bootstrap Notify -->
<script src="{{asset('assets_backend/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>


<!-- Sweet Alert -->
<script src="{{asset('assets_backend/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

<!-- Kaiadmin JS -->
<script src="{{asset('assets_backend/js/kaiadmin.min.js')}}"></script>

<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<script src="{{asset('assets_backend/js/setting-demo.js')}}"></script>
{{--<script src="{{asset('assets_backend/js/demo.js')}}"></script>--}}
@stack('script')
</body>
</html>
