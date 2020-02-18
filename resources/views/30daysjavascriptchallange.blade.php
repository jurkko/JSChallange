@extends('layouts.app')

@section('content')
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
                    <h4><a href="{{ route('PagesController.variables')}}">Task 2</a></h4>
                        <h6>Updating CSS variables with JS</h6>
                        <div class="icon">
                            <img src="{{url('storage/icons/formula.png')}}" alt="Image"/>
                        </div>
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
@endsection