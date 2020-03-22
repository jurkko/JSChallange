
@extends('layouts.app')

@section('additional')
<script type="text/javascript" src="{{ URL::asset('js/speechRecognition.js') }}"></script>

@endsection


@section('content')
<div class="words" contenteditable>

</div>
@endsection


