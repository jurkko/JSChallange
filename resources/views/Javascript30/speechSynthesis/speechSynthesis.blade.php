
@extends('layouts.app')

@section('additional')
<script type="text/javascript" src="{{ URL::asset('js/speechSynthesis.js') }}"></script>
<link href="{{ asset('css/speechSynthesis.css') }}" rel="stylesheet"> 
@endsection


@section('content')
<div class="voiceinator">

    <h1>Dolgcajt mi je v karanteni</h1>

    <select name="voice" id="voices">
    <option value="">Select A Voice</option>
    </select>

    <label for="rate">Rate:</label>
    <input name="rate" type="range" min="0" max="3" value="1" step="0.1">

    <label for="pitch">Pitch:</label>

    <input name="pitch" type="range" min="0" max="2" step="0.1">
    <textarea name="text">Hello! I love JavaScript 👍</textarea>
    <button id="stop">Stop!</button>
    <button id="speak">Speak</button>

</div>

@endsection


