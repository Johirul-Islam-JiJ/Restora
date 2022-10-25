<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Resort;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::with('resort')->latest()->paginate();
        return view('bookings.index', compact('bookings'));
    }


    public function create(Resort $resort)
    {
        return view('bookings.create', compact('resort'));

    }


    public function store(Request $request)
    {
        //
    }


    public function show(Booking $booking)
    {
        //
    }


    public function edit(Booking $booking)
    {
        //
    }


    public function update(Request $request, Booking $booking)
    {
        //
    }


    public function destroy(Booking $booking)
    {
        //
    }
}
