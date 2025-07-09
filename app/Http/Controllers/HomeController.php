<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        // MVC: Model, View, Controller
        return view('test');
    }
}
