@extends('beers.layout')

@section('content')
 
<div class="card">

  <div class="card-header"><b>ADDING NEW BEER</div>

  <div class="card-body">
      
      <form action="{{ url('beer') }}" method="post">

        {!! csrf_field() !!}

        <label>Name</label></br>

        <input type="text" name="name" id="name" class="form-control"></br>

        <label>Type</label></br>

        <input type="text" name="type" id="type" class="form-control"></br>

        <label>Unit Price</label></br>

        <input type="text" name="unitprice" id="unitprice" class="form-control"></br>
        
        <label>Country</label></br>

        <input type="text" name="country" id="country" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>

    </form>
   
  </div>

</div>
 
@stop