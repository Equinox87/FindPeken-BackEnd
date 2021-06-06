<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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

    public function user()
    {
        $data = User::all();
        return view('user.user', compact('data'));
    }
    public function adduser(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
        ]);
        $data = User::all();
        foreach ($data as $value) {
            $email = $value->email;
            if ($request->email != $email) {
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
                // dd($email);
                User::create([
                    'name' => $request->nama,
                    'email' => $request->email,
                    'password' => Hash::make('123'),
                    'img' => $imgname,
                ]);
                return redirect('user')->with('sukses', 'Data Berhasil Ditambah!');
            } else {
                return redirect('user')->with('gagal', 'Email Sudah Terdaftar!');
            }
        }
    }
    public function edit($id)
    {
        $data = User::find($id);
        // dd($data);
        return view('user.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
        ]);
        $user = User::find($id);
        $format = array('jpg', 'png', 'jpeg', 'gif', 'svg', 'jfif');
        if ($request->hasFile('gambar')) {
            $resorce       = $request->file('gambar');
            $imgname   = $resorce->getClientOriginalName();
            $ext1 = explode('.', $imgname);
            $ext = strtolower($ext1[1]);
            if (in_array($ext, $format)) {
                $resorce->move(\base_path() . "/public/images", $imgname);
                $imgname = base64_encode($imgname);
                echo "gambar berhasil di upload";
            } else {
                return redirect()->back()->with('gagal', 'Format file tidak sesuai!,hanya bisa upload gambar dengan format: .jpg, .png, .jpeg, .gif, .svg, .jfif');
            }
        } else {
            $imgname = $user->img;
        }
        if ($request->password != null) {
            if ($request->password == $request->conPass) {
                $pass = Hash::make($request->password);
            } else {
                return redirect()->back()->with('gagal', 'Pasword dan Konformasi Password Harus sama!');
            }
        } else {
            $pass = $user->password;
        }
        // dd($request->all(), $imgname, $pass);

        $user->update([
            'img' => $imgname,
            'name' => $request->nama,
            'email' => $request->email,
            'password' => $pass,
            'img' => $imgname,
        ]);
        return redirect('user')->with('sukses', 'Data Berhasil Diupdate!');
    }
    public function delete($id)
    {
        $data = User::find($id);
        File::delete(
            public_path('images/') . base64_decode($data->img)
        );
        $data->delete($data);
        return redirect('user')->with('sukses', 'Data berhasil dihapus!');
    }

    // logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
