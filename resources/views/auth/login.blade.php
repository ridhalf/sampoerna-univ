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
        href="{{asset('assets_backend/img/kaiadmin/favicon.ico')}}"
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
</head>
<body>
<div class="wrapper">
    <div class="container" style="padding-top: 15rem">
            <div class="row justify-content-center align-items-center mb-1">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">{{ __('Login') }}</div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group @error('email') has-error has-feedback @enderror">
                                        <label for="email">{{ __('Email Address') }}</label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="email"
                                            placeholder="Enter Email"
                                            name="email"
                                            value="{{ old('email') }}"
                                            required autocomplete="email" autofocus
                                        />
                                        @error('email')
                                        <small id="emailMessage" class="form-text text-danger"
                                        >{{$message}}</small>
                                        @enderror


                                    </div>
                                    <div class="form-group @error('password') has-error has-feedback @enderror">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input
                                            type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            id="password"
                                            placeholder="Password"
                                            name="password"
                                            required autocomplete="current-password"
                                        />
                                    </div>
                                    @error('password')
                                    <small id="emailMessage" class="form-text text-danger"
                                    >{{$message}}</small
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success" type="submit">{{ __('Login') }}</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('assets_backend/js/core/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('assets_backend/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets_backend/js/core/bootstrap.min.js')}}"></script>

<!-- Bootstrap Notify -->
<script src="{{asset('assets_backend/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<!-- Sweet Alert -->
<script src="{{asset('assets_backend/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

<!-- Kaiadmin JS -->
<script src="{{asset('assets_backend/js/kaiadmin.min.js')}}"></script>

<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<script src="{{asset('assets_backend/js/setting-demo.js')}}"></script>
{{--<script src="{{asset('assets_backend/js/demo.js')}}"></script>--}}
</body>
</html>
