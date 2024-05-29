<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    function search(Request $request){
        $searchTerm = $request->input('search');
    
        // Query to fetch users based on the search term
        $users = User::where('nom', 'like', "%$searchTerm%")
                    ->orWhereRaw("CONCAT(nom, ' ', prenom) LIKE '%$searchTerm%'")
                    ->orWhereRaw("CONCAT(prenom, ' ', nom) LIKE '%$searchTerm%'")
                    ->orWhere('prenom', 'like', "%$searchTerm%")
                    ->orWhere('pole', 'like', "%$searchTerm%")
                    ->orWhere('groupe', 'like', "%$searchTerm%")
                    ->get();

        session(['users' => $users]);
        return view('reservationSale');
    }
}
