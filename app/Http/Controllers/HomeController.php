<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tanggal = date("d-m-Y");
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $jam = date("H:i:s");
        $a = date("H");
        if (($a >= 6) && ($a <= 11)) {
            $salam = "Selamat Pagi !! ";
        } else if (($a >= 11) && ($a <= 15)) {
            $salam = "Selamat  Siang !! ";
        } elseif (($a > 15) && ($a <= 18)) {
            $salam = "Selamat Sore !! ";
        } else {
            $salam = "Selamat Malam !! ";
        }

        $data = User::all();
        $jmlUser = count($data);
        return view('layouts.dashboard', compact('tanggal', 'salam', 'jmlUser'));
    }
}
