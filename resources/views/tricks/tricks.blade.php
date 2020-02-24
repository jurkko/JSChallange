
@extends('layouts.app')


@section('content')
<div class="center">


</div>
<p onclick="makegreen()">X BREAK x</p>


<script>

const a = document.querySelector('p');

function makegreen(){
    const p = document.querySelector('p');
    p.style.color = '#BADA55';
    p.style.fontSize = '50px';
}
//////////////////////////////////
// To find the method in browser 
// 1. Find in DOM
// 2. Break on 
// 3. Attribute modification
// 4. Run the method again


console.log(' %c hello', 'font-size:50px');
//////////////////////////////////
// Basicly change(style) console
//


//////////////////////////////////
// Warnings, Erros, Info
console.warn('aaah shit');
console.error('Oh no');
console.info('info');
console.assert(1===2,'tele');
console.assert(1===1,'najs');
console.clear();
console.dir(a); // to see properties and methods

//////////////////////////////////
// Counting

console.count('Wes');
console.count('Wes');
console.count('Wes');
console.count('Wes');
console.count('Wes');

//////////////////////////////////
// Timing

console.time('fetching data'); // same string
    fetch('https://api.github.com/users/wesbos')
      .then(data => data.json())
      .then(data => {
        console.timeEnd('fetching data'); // same string
        console.log(data);
      });
</script>
@endsection