<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'name' =>'required|max:255',
            'username' =>'required|max:255',
            'email' =>'required|email|',
            'password' =>'required|min:6',
        ]);

        $validatedata['password'] = bcrypt($validatedata['password']);
        user::create($validatedata);
        return redirect('/')->with('Register is successful Please Login');
    }
}
