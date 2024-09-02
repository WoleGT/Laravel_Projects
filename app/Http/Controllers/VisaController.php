<?php

namespace App\Http\Controllers;


use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Requests\BookingRequest;
use App\Http\Controllers\VisaController;

class VisaController extends Controller
{
     
    public function index()
    {
        return view ('visa');

    }

    public function store(BookingRequest $request)
    {
        $data = $request->validated();


        Booking::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
]);
        return back()->with("msg", "suceessfull, we will contact you shortly");    
    }
}
    
    
    
    

