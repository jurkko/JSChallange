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
                <a class="nav-link" href="#">30 days JS challange</a>
            </li>
            <li class="navbar-button">
                <a class="nav-link" href="#">Wanna see some cool landing pages?</a>
            </li>
      
            </ul>
        </div>
    </nav>
        <div class="container">
            <div class="row">
                <div class="col-mine">
                    <h4><a href="{{ route('PagesController.piano')}}">Task 1</a></h4>
                    <h6>Piano</h6>
                    <div class="icon">
                        <img src="{{url('storage/icons/piano.png')}}" alt="Image"/>
                    </div>
                </div>
                <div class="col-mine">
                <h4><a href="{{ route('PagesController.clock')}}">Task 2</a></h4>
                    <h6>Clock</h6>
                    <div class="icon">
                        <img src="{{url('storage/icons/clock.png')}}" alt="Image"/>
                    </div>
                   
                </div>
                <div class="col-mine">
                    <h4>Task 3</h4>
                </div>
                <div class="col-mine">
                    <h4>Task 4</h4>
                </div>
                <div class="col-mine">
                    <h4>Task 5</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-mine">
                1 of 3
                </div>
                <div class="col-mine">
                2 of 3
                </div>
                <div class="col-mine">
                3 of 3
                </div>
                <div class="col-mine">
                2 of 3
                </div>
                <div class="col-mine">
                3 of 3
                </div>
           
           
            </div>
            <div class="row">
                <div class="col-mine">
                1 of 3
                </div>
                <div class="col-mine">
                2 of 3
                </div>
                <div class="col-mine">
                3 of 3
                </div>
                <div class="col-mine">
                2 of 3
                </div>
                <div class="col-mine">
                3 of 3
                </div>
              
            </div>
            <div class="row">
                <div class="col-mine">
                1 of 3
                </div>
                <div class="col-mine">
                2 of 3
                </div>
                <div class="col-mine">
                3 of 3
                </div>
                <div class="col-mine">
                2 of 3
                </div>
                <div class="col-mine">
                3 of 3
                </div>
            </div>
            <div class="row">
                <div class="col-mine">
                1 of 3
                </div>
                <div class="col-mine">
                2 of 3
                </div>
                <div class="col-mine">
                3 of 3
                </div>
                <div class="col-mine">
                2 of 3
                </div>
                <div class="col-mine">
                3 of 3
                </div>
            </div>
        </div>
    </body>
</html>
