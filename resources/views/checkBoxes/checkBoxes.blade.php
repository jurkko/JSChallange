
@extends('layouts.app')

@section('content')
<div class="inbox">
    <div class="item">
      <input type="checkbox">
      <p>This is an inbox layout.</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Check one item</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Hold down your Shift key</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Check a lower item</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Everything in between should also be set to checked</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Try to do it without any libraries</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Just regular JavaScript</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Good Luck!</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Don't forget to tweet your result!</p>
    </div>
  </div>


  <script>
    const checkboxes = document.querySelectorAll('.inbox input[type="checkbox"]');

let lastChecked;

function handleCheck(e) {

  let inBetween = false;
  if (e.shiftKey && this.checked) {

    checkboxes.forEach(checkbox => {
      console.log(checkbox);
      if (checkbox === this || checkbox === lastChecked) {
        inBetween = !inBetween; // ?????

      }

      if (inBetween) {
        checkbox.checked = true;
      }
    });
  }

  lastChecked = this;
}

checkboxes.forEach(checkbox => checkbox.addEventListener('click', handleCheck));
  </script>


@endsection