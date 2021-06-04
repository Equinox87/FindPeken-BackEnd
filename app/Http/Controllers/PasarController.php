<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use Illuminate\Http\Request;

class PasarController extends Controller
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
    public function pasar()
    {
        $data = Pasar::where('pasar_status', 1)->get();
        return view('pasar.pasar', compact('data'));
    }
    public function addpasar(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);
        $status = 1;
        $format = array('jpg', 'png', 'jpeg', 'gif', 'svg', 'jfif');
        if ($request->gambar != null) {
            $resorce       = $request->file('gambar');
            $imgname   = $resorce->getClientOriginalName();
            $ext1 = explode('.', $imgname);
            $ext = strtolower($ext1[1]);
            if (in_array($ext, $format)) {
                // $resorce->move(\base_path() . "/public/imgpasar", $imgname);
                $imgname = base64_encode($imgname);
                echo "gambar berhasil di upload";
            } else {
                return redirect()->back()->with('gagal', 'Format file tidak sesuai!,hanya bisa upload gambar dengan format: .jpg, .png, .jpeg, .gif, .svg, .jfif');
            }
        } else {
            $imgname = null;
        }
        // $img = base64_encode($imgname);
        // $nama = base64_decode($img);
        Pasar::create([
            'pasar_nama' => $request->nama,
            'pasar_deskripsi' => $request->deskripsi,
            'pasar_alamat' => $request->alamat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'pasar_gambar' => $imgname,
            'pasar_status' => $status,
        ]);
        // dd($request->all(), $imgname);
        return redirect('pasar')->with('sukses', 'Data Berhasil Ditambah!');
    }
    public function edit($id)
    {
        $data = Pasar::find($id);
        // dd($data);
        return view('pasar.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $pasar = Pasar::find($id);
        $status = 1;
        $format = array('jpg', 'png', 'jpeg', 'gif', 'svg', 'jfif');
        if ($request->hasFile('gambar')) {
            $resorce       = $request->file('gambar');
            $imgname   = $resorce->getClientOriginalName();
            $ext1 = explode('.', $imgname);
            $ext = strtolower($ext1[1]);
            if (in_array($ext, $format)) {
                $resorce->move(\base_path() . "/public/imgpasar", $imgname);
                $imgname = base64_encode($imgname);
                echo "gambar berhasil di upload";
            } else {
                return redirect()->back()->with('gagal', 'Format file tidak sesuai!,hanya bisa upload gambar dengan format: .jpg, .png, .jpeg, .gif, .svg, .jfif');
            }
        } else {
            $imgname = $pasar->pasar_gambar;
        }

        // dd($imgname);
        $pasar->update([
            'pasar_nama' => $request->nama,
            'pasar_deskripsi' => $request->deskripsi,
            'pasar_alamat' => $request->alamat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'pasar_gambar' => $imgname,
            'pasar_status' => $status,
        ]);
        return redirect('pasar')->with('sukses', 'Data Berhasil Diupdate!');
    }

    public function delete($id)
    {
        $data = Pasar::find($id);
        $data->update([
            'pasar_status' => 0,
        ]);
        return redirect('pasar')->with('sukses', 'Data berhasil dihapus!');
    }
}
