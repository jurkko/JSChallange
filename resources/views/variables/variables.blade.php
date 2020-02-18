

@extends('layouts.app')


@section('additional')
<script type="text/javascript" src="{{ URL::asset('js/variables/variables.js') }}"></script>
@endsection





@section('navadd')
    <div class="controls">
        <label for="spacing" class="controlsLabel">Spacing:</label>
        <input type="range" name="spacing" min="10" max="25" value="10" data-sizing="px" class="control">
    
        <label for="blur" class="controlsLabel">Blur:</label>
        <input type="range" name="blur" min="00" max="25" value="10" data-sizing="px" class="control">
    </div>
    

@endsection



@section('content')
<div class="pic">
    <img src="{{url('/images/got.jpg')}}" class="responsive">
</div>

<script>
    const inputs = document.querySelectorAll('input');
    function handleUpdate(){
        
        const suffix = this.dataset.sizing || '';
        console.log(suffix);
        console.log(this.name);
        document.documentElement.style.setProperty(`--${this.name}`,this.value + suffix);
    }

    inputs.forEach(input => input.addEventListener('change', handleUpdate));
</script>

@endsection
