<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminControlUsers extends Controller
{
    public function SeeUsers()
    {

        $users = User::all();
        return view('RegUsers', compact('users'));
    }
}
