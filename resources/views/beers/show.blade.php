@extends('beers.layout')

@section('content')
 
<div class="card">

  <b>

  <div class="card-header">Beer Information Page</div>

  <div class="card-body">
   
 
        <div class="card-body">

        <p class="card-title">Name : {{ $beers->name }}</p>

        <br>

        <p class="card-text">Type : {{ $beers->type }}</p>

        <br>

        <p class="card-text">Unit Price : {{ $beers->unitprice }}</p>

        <br>

        <p class="card-text">Country : {{ $beers->country }}</p>

  </div>
  
  </div>

</b>

</div>