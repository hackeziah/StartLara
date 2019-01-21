<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $title = 'About Satin';
        return view('pages.abouts',compact('title'));
    }
    

    public function contacts()
    {
        return view('pages.contacts');
    }
}
