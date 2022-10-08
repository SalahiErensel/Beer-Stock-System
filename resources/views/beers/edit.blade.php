@extends('beers.layout')

@section('content')
 
<div class="card">

  <div class="card-header"><b>EDIT BEER</b></div>

  <div class="card-body">
      
      <form action="{{ url('beer/' .$beers->id) }}" method="post">

        {!! csrf_field() !!}

        @method("PATCH")

        <input type="hidden" name="id" id="id" value="{{$beers->id}}" id="id" />

        <label><b>Name</b></label></br>

        <input type="text" name="name" id="name" value="{{$beers->name}}" class="form-control"></br>

        <label><b>Type</b></label></br>

        <input type="text" name="type" id="type" value="{{$beers->type}}" class="form-control"></br>

        <label><b>Unit Price</b></label></br>

        <input type="text" name="unitprice" id="unitprice" value="{{$beers->unitprice}}" 

        class="form-control"></br>

        <label><b>Country</b></label></br>

        <input type="text" name="country" id="country" value="{{$beers->country}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>

    </form>
   
  </div>
  
</div>
 
@stop