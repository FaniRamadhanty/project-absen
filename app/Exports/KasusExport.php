<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

// app/Exports/KasusExport.php
use App\Models\Kasus;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class KasusExport implements FromView
{
    public function view(): View
    {
        return view('report.excel', [
            'kasus' => Kasus::all(),
        ]);
    }
}

