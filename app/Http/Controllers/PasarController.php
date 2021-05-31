<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use Illuminate\Http\Request;

class PasarController extends Controller
{
    public function pasar()
    {
        $data = Pasar::all();
        return view('pasar.pasar', compact('data'));
    }
    public function addpasar(Request $request)
    {
        dd($request->all());
    }
}
