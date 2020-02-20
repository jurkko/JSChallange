
@extends('layouts.app')
@section('additional')
<script type="text/javascript" src="{{ URL::asset('js/imageGalery/imageGalery.js') }}"></script>
<link href="{{ asset('css/images.css') }}" rel="stylesheet">
@endsection




@section('content')
<div class="panels">
    <div class="panel panel1">
        <p>Lorem ipsum1</p>
        <p>Lorem ipsum2</p>
        <p>Lorem ipsum3</p>
    </div>
    <div class="panel panel2">
        <p>Lorem ipsum1</p>
        <p>Lorem ipsum2</p>
        <p>Lorem ipsum3</p>
    </div>
    <div class="panel panel3">
        <p>Lorem ipsum1</p>
        <p>Lorem ipsum2</p>
        <p>Lorem ipsum3</p>
    </div>
    <div class="panel panel4">
        <p>Lorem ipsum1</p>
        <p>Lorem ipsum2</p>
        <p>Lorem ipsum3</p>
    </div>
    <div class="panel panel5">
        <p>Lorem ipsum1</p>
        <p>Lorem ipsum2</p>
        <p>Lorem ipsum3</p>
    </div>
</div>
<script>
    const panels = document.querySelectorAll('.panel');
    function toggleOpen(){
        this.classList.toggle('open');
    }

    function toggleActive(e){
        if (e.propertyName.includes('flex')){
            this.classList.toggle('open-active');
        }
    }


    panels.forEach(panel => panel.addEventListener('click', toggleOpen));
    panels.forEach(panel => panel.addEventListener('transitionend', toggleActive));
    //toggleOpen 
    //toggleOpen() --> triggers on page load
    console.log(panels);
</script>
@endsection