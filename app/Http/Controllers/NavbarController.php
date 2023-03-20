<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function navbar()
    {
        $user = User::query()
            ->get();

        dd($user);
        return view('/layouts/navbar', [
            'user' => $user
        ]);
    }
}
