
@extends('layouts.app')


@section('content')

<div class="welcome">
    
       
        <h1><em>Check the console m8 </em> 💁</h1>
     
</div>
@endsection
<script>

const people = [
      { name: 'Wes', year: 1988 },
      { name: 'Kait', year: 1986 },
      { name: 'Irv', year: 1970 },
      { name: 'Lux', year: 2015 }
    ];

    const comments = [
      { text: 'Love this!', id: 523423 },
      { text: 'Super good', id: 823423 },
      { text: 'You are the best', id: 2039842 },
      { text: 'Ramen is my fav food ever', id: 123523 },
      { text: 'Nice Nice Nice!', id: 542328 }
    ];


    // some() check if it exists -->
     const isAdult = people.some(function(person) {
            const currentYear = (new Date()).getFullYear();
            if(currentYear - person.year >= 19){
                return true;
            }
     });
     console.log({isAdult}); //inside curly brackets --> returns object to

    // cleaner method
     const isAdult2 = people.some(person => {
            const currentYear = (new Date()).getFullYear();
           return currentYear - person.year >=19;
     });
     console.log({isAdult2}); 

     //expert level *_*
     const isAdult3 = people.some(person => ((new Date()).getFullYear()) - person.year >=19);

     console.log({isAdult3}); 






    //every method --> checks for every object in array
     const every = people.every(person => ((new Date()).getFullYear()) - person.year >=19);






     //find --> kinda obvious, don't you think
     const comment = comments.find(comment => {
         if (comment.id === 823423){
             return true;
         }
     })
     console.log(comment);

     //one-liner 
     const comment2 = comments.find(comment => comment.id === 823423);
         
     // findIndex()
     const index = comments.findIndex(comment => comment.id === 823423);
     console.log(index);

     comments.splice(index,1);


     //But y tho?
     const newComments = [
        ...comments.slice(0,index),
        ...comments.slice(index+1)
     ];

     console.log(newComments);
</script>