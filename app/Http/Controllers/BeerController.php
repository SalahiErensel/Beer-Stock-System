<?php

namespace App\Http\Controllers;

use App\Models\Beer;

use Illuminate\Http\Request;

class BeerController extends Controller

{
    public function index()

    {
        $beers = Beer::all();

        return view ('beers.index')->with('beers', $beers);
    }
    
    public function create()

    {
        return view('beers.create');
    }
  
    public function store(Request $request)

    {
        $input = $request->all();

        Beer::create($input);

        return redirect('beer')->with('flash_message', 'Beer Addedd!');  
    }
    
    public function show($id)

    {
        $beer = Beer::find($id);

        return view('beers.show')->with('beers', $beer);
    }
    
    public function edit($id)

    {
        $beer = Beer::find($id);
        return view('beers.edit')->with('beers', $beer);
    }
  
    public function update(Request $request, $id)

    {
        $beer = Beer::find($id);

        $input = $request->all();

        $beer->update($input);

        return redirect('beer')->with('flash_message', 'Beer Updated!');  
    }
  
    public function destroy($id)

    {
        Beer::destroy($id);
        return redirect('beer')->with('flash_message', 'Beerdeleted!');  
    }
}