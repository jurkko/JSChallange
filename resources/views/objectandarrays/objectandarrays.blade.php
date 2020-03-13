@extends('layouts.app')



@section('content')

@endsection

@section('javascript')

<script>

  // start with strings, numbers and booleans

    let age = 100;
    let age2 = 100;
    console.log(age, age2); // 100, 100
    age = 200;
    console.log(age, age2); // 200, 100

    let name = 'Jure';
    let name2 = name;
    console.log(name, name2);
    name = 'Turk';
    console.log(name, name2);
    // Let's say we have an array
    const players = ['Wes', 'Sarah', 'Ryan', 'Poppy'];

    // and we want to make a copy of it.
     

    const team2 = players.slice(); //////////////////// Makes a copy of Array
    // OR
    const team3 = [].concat(players); //////////////////// Makes a copy of Array
    // OR
    const team4 = [...players]; //////////////////// Makes a copy of Array
    // OR
    const team5 = Array.from(players); //////////////////// Makes a copy of Array

    console.log(team2);
    console.log(team3);
    console.log(team4);
    console.log(team5);

    const team = players; //////////////////////////////// team is a REFERANCE to array
  
    team[3]='Lux';
    console.log(team, players);





  
    const person = {
      name: 'Wes Bos',
      age: 80
    };
    // how do we take a copy instead?

    const cap2 = Object.assign({}, person, { number: 99, age: 12 });
    console.log(cap2);
    /

    // Things to note - this is only 1 level deep - both for Arrays and Objects.
    // For more levels there are different functions available

    const person2 = {
      name: 'jure turk',
      age: 80
    };

    const person2copy = Object.assign({}, person2);
    console.log(person2copy);


</script>

@endsection
