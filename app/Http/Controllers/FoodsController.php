<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodsController extends Controller
{
   
   //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
 /**
     * Show the manually add page.
     *
     * @return \Illuminate\Http\Response
     */
    public function manuallyAdd()
    {

        return view('foods/manuallyAdd');
    }

    /**
     * Show the manually delete page.
     *
     * @return \Illuminate\Http\Response
     */
    public function manuallyDelete()
    {
       return view('foods/manuallyDelete');
    }


    /**
     * Show the manually delete pages for each category.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteFish()
    {
        $foods = Food::where('kategorie', 'fisch & fleisch')->get();
        return view('foods/ListeManuallyDelete')->with('foods', $foods);
    }
    
     /**
     * Show the manually delete pages for each category.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteMilk()
    {
        $foods = Food::where('kategorie', 'milchprodukte')->get();
        return view('foods/ListeManuallyDelete')->with('foods', $foods);
        
    }

     /**
     * Show the manually delete pages for each category.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteVeg()
    {
        $foods = Food::where('kategorie', 'obst & gemüse')->get();
        return view('foods/ListeManuallyDelete')->with('foods', $foods);
    }

     /**
     * Show the manually delete pages for each category.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteBread()
    {
        $foods = Food::where('kategorie', 'brot')->get();
        return view('foods/ListeManuallyDelete')->with('foods', $foods);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $foods = Food::all();
        return view('foods\index')->with('foods', $foods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
