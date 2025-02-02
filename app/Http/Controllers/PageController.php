<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    
    public function laptops()
    {
        return view('pages.laptops');
    }
    public function graphicCards()
    {
        return view('pages.graphiccards');
    }
    public function ram()
    {
        return view('pages.rams');
    }
    public function processors()
    {
        return view('pages.processors');
    }
    public function motherboards()
    {
        return view('pages.motherboards');
    }

  
    
}
