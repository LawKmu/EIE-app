<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;


class reservationController extends Controller
{
    public function search(Request $req){
        $date = $req->input('date'); // Assuming 'date' is the name of the input field for date
        $heurD = $req->input('heurD'); 
    
        $foundReservation = Reservation::where('date', $date)
            ->where('heurD', $heurD)
            ->first();
        if(!$foundReservation){
            session(['foundRes' => true, 'message' => 'No reservation found']);
            return view('reservationSale');
        }else{
            session(['foundRes' => true, 'message' => 'Reservation found']);
            return view('reservationSale');
        }
        
    }
}
