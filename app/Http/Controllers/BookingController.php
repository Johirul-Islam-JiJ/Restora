<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Resort;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function store(Request $request, Resort $resort)
    {
        // Checking Date exits or not
        $bookingExits = Booking::where('resort_id', $request->resort_id)
            ->whereBetween('checkin', [$request->checkin, $request->checkout])
            ->orWhereBetween('checkout', [$request->checkin, $request->checkout])
            ->orWhere(function ($query) use ($request) {
                $query->where('checkin', '<=', $request->checkin)
                    ->where('checkout', '>=', $request->checkout);
            })->first();

        if ($bookingExits) {
            return view('datecheck.error');
        } else {
            $valid = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'nid' => ['required', 'string', 'max:255'],
                'checkin' => ['required', 'date', 'after_or_equal:today'],
                'checkout' => ['required', 'date', 'after_or_equal:checkin'],
            ]);

            $booking = $resort->bookings()->create($valid);

            $user = User::first();
            if ($booking) {
                // send mail
                // try {
                //     Mail::to($booking->email)->send(new BookingConfirmation($booking));
                //     Mail::to($user->email)->send(new NewMailReceived($booking, $user));
                // } catch (\Exception$exception) {
                //     echo $exception->getMessage();
                // }
                return redirect('/')->with('message', ' Booking Complete Successfully');
            }
            return back()->with('error', 'Somethings Went Wrong');
        }
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
