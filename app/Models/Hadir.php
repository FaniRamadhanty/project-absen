<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hadir extends Model
{
    protected $table = "hadirs";
    protected $fillable = ['id', 'aktivitas', 'id_pegawai'];
    public $timestamps = true;

    public function Pegawai()
    {
        return $this->belongsTo('App\Models\Pegawai','id_pegawai');
    }

    // public function Absen()
    // {
    //     return $this->hasMany('App\Models\Absen','id_hadir');
    // }
    use HasFactory;
}
