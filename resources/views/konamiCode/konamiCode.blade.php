@extends('layouts.app')



@section('content')




@endsection

@section('javascript')

<script>
    const pressed = [];
    const code = 'joke';

    window.addEventListener('keyup', (e) => {
        console.log(e.key);
        pressed.push(e.key);
        pressed.splice(-code.length -1, pressed.length - code.length);
        console.log(pressed);
        if(pressed.join('').includes(code)){
            console.log('Nice');
            cornify_add();
        }

    })
</script>

@endsection
