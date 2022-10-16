<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use Illuminate\Http\Request;

class ResortController extends Controller
{

    public function index()
    {
        $resort = Resort::latest()->paginate();
        return view('resorts.index',compact('resort'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Resort $resort)
    {
        //
    }


    public function edit(Resort $resort)
    {
        //
    }


    public function update(Request $request, Resort $resort)
    {
        //
    }


    public function destroy(Resort $resort)
    {
        //
    }
}
