
@extends('layouts.app')

@section('additional')
<link href="{{ asset('css/welcomepage.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card-welcome">
                    <div class="face face1">
                        <div class="content">
                            <img src="{{url('/images/js.png')}}">
                            <h3>neki</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>nekiespignsčgjesghčo</p>
                            <a class="nav-link" href="{{ route('PagesController.thirtydaysJSchallange')}}">30 days JS challange</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card-welcome">
                    <div class="face face1">
                        <div class="content">
                            <img src="">
                            <h3>neki</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>nekiespignsčgjesghčo</p>
                            <a class="nav-link" href="{{ route('PagesController.thirtydaysJSchallange')}}">30 days JS challange</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card-welcome">
                    <div class="face face1">
                        <div class="content">
                            <img src="">
                            <h3>neki</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>nekiespignsčgjesghčo</p>
                            <a class="nav-link" href="{{ route('PagesController.thirtydaysJSchallange')}}">30 days JS challange</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 @endsection
