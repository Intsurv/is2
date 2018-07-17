<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/home');
    }

    /**
     * Show the add page.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {

        return view('foods/add');
    }

    /**
     * Show the remove page.
     *
     * @return \Illuminate\Http\Response
     */
    public function remove()
    {
        return view('foods/remove');
    }

    
}
