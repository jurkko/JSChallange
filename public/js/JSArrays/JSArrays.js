const inventors = [
{first:'Albert', last:'Einstein', year:1879, passed:1955},
{first:'Isaac', last:'Newton', year:1643, passed:1727},
{first:'Galileo', last:'Galilei', year:1564, passed:1642},
{first:'Marie', last:'Curie', year:1867, passed:1934},
{first:'Johannes', last:'Kepler', year:1571, passed:1630},
{first:'Nicolaus', last:'Copernicus', year:1473, passed:1543},
{first:'Max', last:'Planck', year:1858, passed:1947},
];

const people = [
    'JURE, TURK', 'JAMES, SMITH', 'JOHN, JOHNSON', 'ROBERT, WILLIAMS', 'MICHAEL, JONES', 'WILLIAM, BROWN', 'DAVID, DAVIS', 
    'RICHARD, MILLER', 'CHARLES, WILSON','JOSEPH, MOORE','THOMAS, TAYLOR','CHRISTOPHER, ANDERSON','DANIEL, THOMAS',
    'PAUL, JACKSON','MARK, WHITE','DONALD, HARRIS'];


// 1. All inventors that were born in 1500's
const fifteen = inventors.filter(function(inventor){

    if(inventor.year >= 1500 && inventor.year < 1600){
        return true;
    }
  
});

console.table(fifteen);

////////////////
const fifteen2 = inventors.filter(inventor => inventor.year >= 1500 && inventor.year < 1600);
console.table(fifteen2);

//2. All invenots names and surnames
const fullNames = inventors.map(inventor => inventor.first +' '+ inventor.last);
console.log(fullNames);

//3. sort the inventors by birthdate, oldest to youngest
const orderedInventors = inventors.sort(function(a,b){
    if(a.year > b.year){
        return 1;
    } else {
        return -1;
    }
});

console.table(orderedInventors);
///////////////
const orderedInventors2 = inventors.sort((a,b) => a.year > b.year ? 1 : -1);
console.table(orderedInventors2);
///////////////
const youngestToOldest = inventors.sort((oldest, youngest)=>{
    if(oldest.year> youngest.year){
        return 1;
    } else {
        return-1;
    }
});


console.table(youngestToOldest);

//4. how long did all inventors live?
const totalyears = inventors.reduce((total, inventor) => {
    return total + (inventor.passed - inventor.year);
}, 0);

console.log(totalyears);

//5. Sort them by how long they've lived

const lifespan = inventors.sort((a, b)=>{
    const lastGuy = a.passed-a.year;
    const current = b.passed-b.year;

    if(lastGuy > current){
        return 1;
    } else {
        return-1;
    }

});

console.table(lifespan);


//6. Sort People Alphabeticaly name
const alpha = people.sort(function(lastOne, nextOne){
    const [lfirst, llast] = lastOne.split(', ');
    const [nfirst, nlast] = nextOne.split(', ');
    return lfirst > nfirst ? 1 : -1;
});

console.log(alpha);

//7. How many instances are there

const data = ['car','car','car','car','car','car','car','truck','truck','truck','truck','truck','van','van','van','van',]

const transportation = data.reduce((obj, item)=>{
console.log(item);
return obj;
},{}

);