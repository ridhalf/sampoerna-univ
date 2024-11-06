<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  </head>
  <body>
    <div class="navbar"></div>
    <div class="floating"></div>
        @yield('content')
    <div class="footer"></div>
    <script async src="//www.instagram.com/embed.js"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    @stack('script')
  </body>
</html>
