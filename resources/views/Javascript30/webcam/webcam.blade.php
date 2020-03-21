
@extends('layouts.app')

@section('additional')
<script type="text/javascript" src="{{ URL::asset('js/webcam.js') }}"></script>

@endsection


@section('content')

<div class="photobooth">
    <div class="controls">
      <button onClick="takePhoto()" class="w">Take Photo</button>
        <div class="rgb">
        <label for="rmin">Red Min:</label>
        <input type="range" min=0 max=255 name="rmin">
        <label for="rmax">Red Max:</label>
        <input type="range" min=0 max=255 name="rmax">
        <br>
        <label for="gmin">Green Min:</label>
        <input type="range" min=0 max=255 name="gmin">
        <label for="gmax">Green Max:</label>
        <input type="range" min=0 max=255 name="gmax">
        <br>
        <label for="bmin">Blue Min:</label>
        <input type="range" min=0 max=255 name="bmin">
        <label for="bmax">Blue Max:</label>
        <input type="range" min=0 max=255 name="bmax">
      </div> 
    </div>

    <canvas class="photo" width="1000" height="1000"></canvas>
    <video class="player"></video>
    <div class="strip"></div>
  </div>

  <audio class="snap" src="https://wesbos.com/demos/photobooth/snap.mp3" hidden></audio>

 
@endsection


