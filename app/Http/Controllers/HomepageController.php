<?php

namespace App\Http\Controllers;

use App\Models\Resort;

class HomepageController extends Controller
{
     public function homepage()
    {
        $resorts = Resort::latest()->get();
        return view('homepage', compact('resorts'));
    }
}
