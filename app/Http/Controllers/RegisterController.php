<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('session.register');
    }

    public function store()
{
    // Validate input data
    $attributes = request()->validate([
        'nom' => ['required', 'max:50'],
        'prenom' => ['required', 'max:50'],
        'matricule' => ['required', 'max:50', Rule::unique('users', 'matricule')],
        'CIN' => ['required', 'max:50', Rule::unique('users', 'CIN')],
        'phoneNumber' => ['required', 'max:50', Rule::unique('users', 'phoneNumber')],
        'pole' => ['required', 'max:50'],
        'groupe' => ['required', 'max:50'],
        'role' => ['nullable', 'max:50'],
        'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
        'password' => ['required', 'min:5', 'max:20'],
        'agreement' => ['accepted']
    ]);

    // Hash the password
    $attributes['password'] = bcrypt($attributes['password']);

    // Create user
    $user = User::create($attributes);

    // Log in the user
    Auth::login($user);

    // Flash success message
    session()->flash('success', 'Your account has been created.');

    // Redirect to home page
    return redirect('/');
}
}
