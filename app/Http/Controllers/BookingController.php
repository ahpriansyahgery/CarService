<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Booking;
use App\Models\Service;
use App\Models\Mechanic;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking', [
            'cars' => Car::all(),
            'services' => Service::all(),
            'mechanics' => Mechanic::all()
        ]);
          
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        try {
            $validated = $request->validate([
                'customer_name' => 'required|string|max:255',
                'customer_email' => 'required|email',
                'customer_phone' => 'required|digits:12',
                'customer_address' => 'required|string|max:255',
                'code_booking' => 'required|max:3',
                'booking_date' => 'required|date',
                'booking_hour' => 'required',
                'car_id' => 'required',
                'service_id' => 'required',
                'mechanic_id' => 'required',
            ]);
    
            // Debugging input
            \Log::info('Validated Data:', $validated);
    
            // Simpan data
            Booking::create($validated);
    
            return redirect()->route('booking.create')->with('success', 'Booking berhasil disimpan!');
        } catch (\Exception $e) {
            \Log::error('Error Saving Booking:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors('Gagal menyimpan booking.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
