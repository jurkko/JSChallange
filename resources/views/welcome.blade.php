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
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="">Some vanilla JS personal pet projects, to sharpen my JS skills</a>
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
