@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.piano')}}">
                        <h4>Piano</h4>
                            <div class="icon">
                                <img src="{{url('images/piano.png')}}" alt="Piano"/>
                            </div>
                        </a>
                    </div>
                
                    <div class="col mine">
                        <a class="cardlink" href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                            <div class="icon">
                            <img src="{{url('images/clock.png')}}" alt="Clock"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a href="{{ route('PagesController.piano')}}">
                        <h4>Piano</h4>
                            <div class="icon">
                                <img src="{{url('storage/icons/piano.png')}}" alt="Image"/>
                            </div>
                        </a>
                    </div>
                
                    <div class="col mine">
                        <a href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                            <div class="icon">
                                <img src="{{url('storage/icons/piano.png')}}" alt="Image"/>
                            </div>
                        </a>
                    </div>

                    <div class="col mine">
                        <a href="{{ route('PagesController.clock')}}">
                        <h4>Clock</h4>
                            <div class="icon">
                                <img src="{{url('storage/icons/piano.png')}}" alt="Image"/>
                            </div>
                        </a>
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
                    <h4><a href="{{ route('PagesController.JSArrays2')}}">Day 7</a></h4>
                    <h6>Manipulating with Arrays 2</h6>
                    <div class="icon">
                        <img src="{{url('storage/icons/insert.png')}}" alt="Image"/>
                    </div>
                </div>
                <div class="col-mine">
                    <h4><a href="{{ route('PagesController.canvas')}}">Day 8</a></h4>
                    <h6>Canvas</h6>
                    <div class="icon">
                        <img src="{{url('storage/icons/insert.png')}}" alt="Image"/>
                    </div>
                </div>
                <div class="col-mine">
                    <h4><a href="{{ route('PagesController.tricks')}}">Day 9</a></h4>
                    <h6>Tricks</h6>
                    <div class="icon">
                        <img src="{{url('storage/icons/insert.png')}}" alt="Image"/>
                    </div>
                </div>
                <div class="col-mine">
                    <h4><a href="{{ route('PagesController.checkBoxes')}}">Day 10</a></h4>
                    <h6>Multiple checkboxes</h6>
                    <div class="icon">
                        <img src="{{url('storage/icons/insert.png')}}" alt="Image"/>
                    </div>
                </div>
           
            </div>
            <div class="row">
                <div class="col-mine">
                    <h4><a href="{{ route('PagesController.videoPlayer')}}">Day 11</a></h4>
                    <h6>Video player</h6>
                    <div class="icon">
                        <img src="{{url('storage/icons/piano.png')}}" alt="Image"/>
                    </div>              
                </div>
                <div class="col-mine">
                <h4><a href="{{ route('PagesController.konamiCode')}}">Day 12</a></h4>
                    <h6>KONAMI code</h6>
                    <div class="icon">
                        <img src="{{url('storage/icons/piano.png')}}" alt="Image"/>
                    </div>    
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