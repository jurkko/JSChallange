<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     
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
       
      
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="welcome-div">
                <a class="nav-link" href="{{ route('PagesController.thirtydaysJSchallange')}}">30 days JS challange</a>
                </div>
            </div>
            <div class="col-sm">
                <div class="welcome-div">

                </div>
            </div>
            <div class="col-sm">
                <div class="welcome-div">

                </div>
            </div>
        </div>
    </div>

    </body>
</html>
