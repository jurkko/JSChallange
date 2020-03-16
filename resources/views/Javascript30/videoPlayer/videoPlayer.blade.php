@extends('layouts.app')

@section('additional')
<link href="{{ asset('css/videoPlayer.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="player">
     <video class="viewer" src="{{ asset('videos/23.mp4') }}"></video>

     <div class="player__controls">
       <div class="progress">
        <div class="progress__filled"></div>
       </div>
       <button class="player__button toggle" title="Toggle Play">►</button>
       <input type="range" name="volume" class="player__slider" min="0" max="1" step="0.05" value="1">
       <input type="range" name="playbackRate" class="player__slider" min="0.5" max="2" step="0.1" value="1">
       <button data-skip="-10" class="player__button">« 10s</button>
       <button data-skip="25" class="player__button">25s »</button>
     </div>
   </div>
</div>





@endsection

@section('javascript')

<script>

  const player = document.querySelectorAll('.player');
  //const video = document.querySelectorAll('.viewer');
  const video = document.querySelectorAll('.viewer')[0];

  const progress = document.querySelector('.progress');
  const progressBar = document.querySelector('.progress__filled');

  const toggle = document.querySelector('.toggle');
  const skipButtons = document.querySelectorAll('[data-skip]');
  const ranges = document.querySelectorAll('.player__slider');

  function togglePlay() {
    if(video.paused){
      video.play();
    } else {
      video.pause();
    }
  }

  function updateButton() {
    const icon = this.paused ? ('►') : '❚ ❚'; // this = video
    
    
    if (icon.paused){
      icon.style.color = "red";
    } else {
      
    }

    toggle.textContent = icon;
  
  }

  
  function skip() {
    console.log(this.dataset.skip);
    video.currentTime += parseFloat(this.dataset.skip);
    console.log(video.currentTime);
  }

  function handleRangeUpdate() {
   
    video[this.name] = this.value;
    console.log(this.name);
    console.log(this.value);
  }

  function handleProgress() {
  const percent = (video.currentTime / video.duration) * 100;
  progressBar.style.flexBasis = `${percent}%`;
  }

  function scrub(e) {
    console.log(e);
    //offset X --> same as canvas, jusz X-axis info
    const scrubTime = (e.offsetX / progress.offsetWidth) * video.duration;
    console.log(scrubTime);
    video.currentTime = scrubTime;
  }


  video.addEventListener('click', togglePlay);
  video.addEventListener('play', updateButton);
  video.addEventListener('pause', updateButton);
  video.addEventListener('timeupdate', handleProgress);
  toggle.addEventListener('click', togglePlay);
  progress.addEventListener('click', scrub);

  skipButtons.forEach(button => button.addEventListener('click', skip));
  ranges.forEach(range => range.addEventListener('change', handleRangeUpdate));
  ranges.forEach(range => range.addEventListener('mousemove', handleRangeUpdate));
  
  let mousedown = false;
  progress.addEventListener('mousemove', (e) => mousedown && scrub(e));
  progress.addEventListener('mousedown', () => mousedown = true);
  progress.addEventListener('mouseup', () => mousedown = false);



</script>

@endsection
