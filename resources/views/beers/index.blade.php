@extends('beers.layout')

@section('content')

    <div class="container">
        

       <body background='images/background.png'>

        <div class="row">
 
            <div class="col-md-9">

                <div class="card">

                    <div class="card-header">

                        <h2><b>Beer Stock System<b></h2>

                    </div>

                    <div class="card-body">

                        <a href="{{ url('/beer/create') }}" class="btn btn-success btn-sm" title="Add 
                        
                        New Beer"><i class="fa fa-plus" aria-hidden="true"></i> Add New Beer

                        </a>

                        <br/>

                        <br/>

                        <div class="table-responsive">

                            <table class="table">

                                <thead>

                                    <tr>
                                        <th>#</th>

                                        <th>Name</th>

                                        <th>Type</th>

                                        <th>Unit Price</th>

                                        <th>Country</th>

                                    </tr>

                                </thead>

                                <tbody>

                                @foreach($beers as $item)

                                    <tr>

                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $item->name }}</td>

                                        <td>{{ $item->type }}</td>

                                        <td>{{ $item->unitprice}}</td>

                                        <td>{{ $item->country}}</td>
 
                                        <td>
                                            
                                            <a href="{{ url('/beer/' . $item->id) }}" title="View Beer">
                                                
                                                <button class="btn btn-info btn-sm">
                                                    
                                                    <i class="fa fa-eye" aria-hidden="true">
                                                        
                                                    </i>View<button>
                                                        
                                            </a>

                                            <a href="{{ url('/beer/' . $item->id . '/edit') }}" title="Edit Beer">
                                                
                                                <button class="btn btn-warning btn-sm ">
                                                    
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true">
                                                        
                                                    </i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/beer' . '/' . 
                                            
                                            $item->id) }}" accept-charset="UTF-8" 
                                            
                                            style="display:inline">
                                                
                                            {{ method_field('DELETE') }}
                                                
                                            {{ csrf_field() }}
                                                
                                            <button type="submit" class="btn btn-danger btn-sm" 
                                            
                                            title="Delete Beer" onclick="return confirm(&quot;
                                            
                                            Confirm delete?&quot;)">
                                            
                                            <i class="fa fa-trash-o" aria-hidden="true">
                                                
                                            </i> Delete</button>

                                            </form>

                                        </td>

                                    </tr>

                                @endforeach

                                </tbody>

                            </table>

                        </div>
 
                    </div>

                </div>

            </div>

        </div>

    </div>
    
@endsection