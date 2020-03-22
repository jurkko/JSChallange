<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/main.css') }}" rel="stylesheet"> 
    <link href="{{ asset('js/app.js') }}" type="text/javascript"> 
    <!-- -->
   
     @yield('additional')
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Some vanilla JS projects that I build in my free time or from courses</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="navbar-button">
                    <a class="nav-link" href="{{ url('/')}}">Go home</a>     
                </li>
                @yield('navadd')
            </ul>
        </div>
    </nav>
   
    <div id="app">
        @yield("content")
    </div>
    <script src="/js/app.js"></script>
  
          

    @yield('javascript')
    </body>
</html>