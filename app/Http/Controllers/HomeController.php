<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
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

        $user = User::all();
        $jmlUser = count($user);
        $pasar = Pasar::where('pasar_status', 1)->get();
        $jmlPasar = count($pasar);
        return view('layouts.dashboard', compact('tanggal', 'salam', 'jmlUser', 'jmlPasar'));
    }
}
