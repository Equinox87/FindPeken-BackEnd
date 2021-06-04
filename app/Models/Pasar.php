<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasar extends Model
{
    use HasFactory;

    protected $table = "tbl_pasar";
    protected $primaryKey = "pasar_id";
    protected $fillable = [
        'pasar_nama', 'pasar_deskripsi', 'pasar_alamat', 'latitude', 'longitude', 'pasar_gambar', 'pasar_status'
    ];

    public function getImage()
    {
        if (!$this->pasar_gambar) {
            return asset('imgpasar/default.jpg');
        }
        return asset('imgpasar/' . base64_decode($this->pasar_gambar));
    }
}
