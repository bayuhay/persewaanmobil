<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('pages.homepage');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function detail()
    {
        return view('pages.detail');
    }
}