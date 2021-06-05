<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Pasar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class PasarapiController extends Controller
{
    public function pasar()
    {
        $pasar = Pasar::where('pasar_status',1)->get();
        $data = array();
        $response['data'] = array();
        foreach ($pasar as $value) {
            $datas = ([
                'pasar_id' => $value->pasar_id,
                'pasar_nama' => $value->pasar_nama,
                'pasar_deskripsi' => $value->pasar_deskripsi,
                'pasar_alamat' => $value->pasar_alamat,
                'latitude' => $value->latitude,
                'longitude' => $value->longitude,
                'pasar_gambar' => URL::to('/') . '/imgpasar/' . base64_decode($value->pasar_gambar),
                'pasar_status' => $value->pasar_status,
                'created_at' => $value->created_at,
                'updated_at' => $value->updated_at,
            ]);
            array_push($response["data"], $datas);
        }


        return $response;
    }
}
