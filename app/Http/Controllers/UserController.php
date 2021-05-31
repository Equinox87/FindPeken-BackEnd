<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user()
    {
        $data = User::all();
        return view('user.user', compact('data'));
    }

    // logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
