
@extends('layouts.app')
@section('additional')
<script type="text/javascript" src="{{ URL::asset('js/typeAheadFeature/typeAheadFeature.js') }}"></script>
<link href="{{ asset('css/typeAheadFeature/typeAheadFeature.css') }}" rel="stylesheet">
@endsection




@section('content')

<form class="search-form">
    <input type="text" class="search" placeholder="City or State">
    <ul class="suggestions">
      <li>Filter for a city</li>
      <li>or a state</li>
    </ul>
  </form>

<script>
      
  const endpoint = 'https://gist.githubusercontent.com/Miserlou/c5cd8364bf9b2420bb29/raw/2bf258763cdddd704f8ffd3ea9a3e81d25e2c6f6/cities.json';


  //first empty array

  
  const cities = [];
//https://tylermcginnis.com/var-let-const/


  fetch(endpoint)
  .then(blob => blob.json())// returns promise, not data -> returns blob of data
  .then(data => cities.push(...data));  // also blob must be directly parsed to JSON => fit hbuilt in function of course


  function findMatches(wordToMatch, cities){
    return cities.filter(place => {
      const regex = new RegExp(wordToMatch, 'gi'); //g=global, i=insensitive(lower & uppercase)
      return place.city.match(regex || place.state.match(regex));
    });
  }

  function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  }

  function displayMatches(){
    const matchArray = findMatches(this.value, cities);
    console.log(matchArray);
    const html = matchArray.map(place =>{
      const regexHighlighted = new RegExp(this.value, 'gi');
      const cityName = place.city.replace(regexHighlighted, `<span class ="h3">${this.value}</span>`);
      const stateName = place.city.replace(regexHighlighted, `<span class ="h3">${this.value}</span>`);
      return `
      <li>
        <span class="name">${cityName}, ${stateName}</span>
        <span class="population">${numberWithCommas(place.population)}</span>
      </li>
      `
    }).join('');
    suggestions.innerHTML = html;

  }
                             
const searchInput = document.querySelector('.search');
const suggestions = document.querySelector('.suggestions');

searchInput.addEventListener('change', displayMatches);
searchInput.addEventListener('keyup', displayMatches);
</script>
@endsection