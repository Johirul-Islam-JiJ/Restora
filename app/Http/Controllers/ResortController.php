<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use Illuminate\Http\Request;


class ResortController extends Controller
{

    public function index(Request $request)
    {
        $resorts = Resort::latest()->filter(request(['search']))->paginate(5);
        return view('resorts.index',compact('resorts'));
    }


    public function create()
    {
        return view('resorts.create');
    }


    public function store(Request $request)
    {
         $valid =$request->validate([
            'name'=>['required','string','max:255','min:3'],
            'location'=>['required','string','max:255','min:3'],
            'description'=>['required','string','max:255','min:3'],
            'amount'=>['required'],
            'help'=>['required'],
            'image'=>['required','image','max:8192']
        ]);

        if ($request->hasFile('image'))
        $valid['image']=$request->file('image')->store('ResortImage','public');


        Resort::create($valid);
        return redirect(route('resorts.index'));
    }


    public function show(Resort $resort)
    {
        //
    }


    public function edit(Resort $resort)
    {
        $resort = Resort::find($resort->id);
        return view('resorts.edit', compact('resort'));
    }


    public function update(Request $request, Resort $resort)
    {
        $valid =$request->validate([
            'name'=>['required','string','max:255','min:3'],
            'location'=>['required','string','max:255','min:3'],
            'description'=>['required','string','max:255','min:3'],
            'amount'=>['required'],
            'help'=>['required'],
            'image'=>['required','image','max:8192']
        ]);

       if ($request->hasFile('image'))
        $valid['image']=$request->file('image')->store('ResortImage','public');


        $resort->update($valid);
        return redirect(route('resorts.index'));
    }


    public function destroy(Resort $resort)
    {
         $resort = Resort::find($resort->id);
        $resort->delete();
        return back()->with('status','Resort Deleted Successfully!!!');
    }
}
