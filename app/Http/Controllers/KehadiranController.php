<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kehadiran;
use App\Models\Pegawai;
class KehadiranController extends Controller
{
    public function index()
{
    $kehadiran = Kehadiran::with('Pegawai');
    return view('admin.kehadiran.index',compact('kehadiran'));
}
    public function create()
    {
       
    }

    
    public function store(Request $request)
    {
       
    
    }

   
    public function show( $id)
    {
        

        $kehadiran = Kehadiran::findOrFail($id);
        $pegawai=Pegawai::all();
        return view ('admin.kehadiran.show' , compact('kehadiran' , 'pegawai'));
    }

    
    public function edit( $id)
    {

        $kehadiran = Kehadiran::findOrFail($id);
        $pegawai=Pegawai::all();
        return view ('admin.kehadiran.edit' , compact('kehadiran' , 'pegawai'));
    }

    
    public function update(Request $request, $id)
    {
        $kehadiran = Kehadiran::findOrfail($id);
        $kehadiran->id_pegawai =$request->id_pegawai;
        $kehadiran->tgl_awal = $request->tgl_awal;
        $kehadiran->tgl_akhir = $request->tgl_akhir;
        $kehadiran->save();
        return redirect()->route('kehadiran.index')
        ->with(['info' => 'Data berhasil di Edit!']);
    }

    
    public function destroy( $id)
    {
        $data = Kehadiran::findOrFail($id);
        $data->delete();
        return redirect()->route('kota.index')->with(['error' => 'Data berhasil di hapus!']);
    }
}
