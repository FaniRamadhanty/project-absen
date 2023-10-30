<?php

namespace App\Exports;

// app/Exports/ProvinsiExport.php
use App\Models\Kasus;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use App\Models\Provinsi;

class ProvinsiExport implements FromCollection
{
    use Exportable;

    public function collection()
    {
        return Kasus::all();
    }
}

