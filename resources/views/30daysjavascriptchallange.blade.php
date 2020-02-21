@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-mine">
                    <h4><a href="{{ route('PagesController.piano')}}">Day 1</a></h4>
                    <h6>Piano</h6>
                    <div class="icon">
                        <img src="{{url('storage/icons/piano.png')}}" alt="Image"/>
                    </div>
                </div>
                <div class="col-mine">
                <h4><a href="{{ route('PagesController.clock')}}">Day 2</a></h4>
                    <h6>Clock</h6>
                    <div class="icon">
                        <img src="{{url('storage/icons/clock.png')}}" alt="Image"/>
                    </div>
                   
                </div>
                <div class="col-mine">
                    <h4><a href="{{ route('PagesController.variables')}}">Day 3</a></h4>
                        <h6>Updating CSS variables with JS</h6>
                        <div class="icon">
                            <img src="{{url('storage/icons/formula.png')}}" alt="Image"/>
                        </div>
                </div>
                <div class="col-mine">
                    <h4><a href="{{ route('PagesController.JSArrays')}}">Day 4</a></h4>
                    <h6>Manipulating with Arrays</h6>
                    <div class="icon">
                        <img src="{{url('storage/icons/insert.png')}}" alt="Image"/>
                    </div>
                </div>
                <div class="col-mine">
                    <h4><a href="{{ route('PagesController.imageGalery')}}">Day 5</a></h4>
                    <h6>Manipulating with Arrays</h6>
                    <div class="icon">
                        <img src="{{url('storage/icons/insert.png')}}" alt="Image"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-mine">
                    <h4><a href="{{ route('PagesController.typeAheadFeature')}}">Day 6</a></h4>
                    <h6>Type Ahead Feature</h6>
                    <div class="icon">
                        <img src="{{url('storage/icons/insert.png')}}" alt="Image"/>
                    </div>
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