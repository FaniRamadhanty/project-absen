<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\models\Pegawai;
class FrontendController extends Controller
{
    public function tampil()
    {
        return view('admin.index');
    }
}

// ,'posglobal','dunia'