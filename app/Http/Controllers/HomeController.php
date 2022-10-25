<?php

namespace App\Http\Controllers;

use App\Models\Resort;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

   
}
