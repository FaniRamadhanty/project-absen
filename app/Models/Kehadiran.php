<?php

namespace App\Models;
use App\Models\Pegawai;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    protected $table = "kehadirans";
    protected $fillable = ['id', 'tgl_awal',  'tgl_akhir', 'jumlah_hari', 'aktivitas', 'bukti','ket_hadir','dll', 'id_pegawai'];
    public $timestamps = true;  
    public function Pegawai()
    {
        return $this->belongsTo('App\Models\Pegawai','id_pegawai');
    }

    public function Absen()
    {
        return $this->hasMany('App\Models\Absen','id_kehadiran');
    }
   
    use HasFactory;

    public function image()
    {
        if ($this->bukti && file_exists(public_path('img/bukti/' . $this->bukti))) {
            return asset('img/bukti/' . $this->bukti);
        } else {
            return asset('img/no_image.png');
        }
    }
 
    public function deleteImage()
    {
        if ($this->bukti && file_exists(public_path('img/bukti/' . $this->bukti))) {
            return unlink(public_path('img/bukti/' . $this->bukti));
        }
    }
}
