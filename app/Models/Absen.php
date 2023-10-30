<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    public function Pegawai()
    {
        return $this->belongsTo('App\Models\Pegawai','id_pegawai','id');
    }

    public function Kehadiran()
    {
        return $this->belongsTo('App\Models\Kehadiran','id_kehadiran','id');
    }

    public function Hadir()
    {
        return $this->belongsTo('App\Models\Hadir','id_hadir','id');
    }
    use HasFactory;
}
