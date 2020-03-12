
@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card-welcome">
                    <a href="{{ route('PagesController.thirtydaysJSchallange')}}">
                        <div class="face face1">
                            <img class="welcome-img" src="{{url('/images/js.png')}}">
                        </div>
                    </a>
                    <div class="face face2" id="1">
                        <div class="content">                          
                            <p id="dissapearing">Read more</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card-welcome">
                    <div class="face face1">
                        <div class="content">
                            <img src="">
                           
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            
                            30 days JS challange</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card-welcome">
                    <div class="face face1">
                        <div class="content">
                            <img src="">
                          
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                        
                            <a class="nav-link" href="{{ route('PagesController.thirtydaysJSchallange')}}">30 days JS challange</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 @endsection
