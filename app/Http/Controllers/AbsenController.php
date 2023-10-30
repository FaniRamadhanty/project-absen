<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
       
        $pegawais = Pegawai::where('id')->first();

        return view('admin.absen.index', compact('pegawais'));
      

    }
        public function create()
        {
           
        }
    
        
        public function store(Request $request)
        {
           
        
        }
    
       
        public function show( $id)
        {
            
    
            $hadir = Hadir::findOrFail($id);
            $pegawai=Pegawai::all();
            return view ('admin.hadir.show' , compact('hadir' , 'pegawai'));
        }
    
        
        public function edit( $id)
        {
    
            $hadir = Hadir::findOrFail($id);
            $pegawai=Pegawai::all();
            return view ('admin.hadir.edit' , compact('hadir' , 'pegawai'));
        }
    
        
        public function update(Request $request, $id)
        {
            $hadir = Hadir::findOrfail($id);
            $hadir->id_pegawai =$request->id_pegawai;
            $hadir->aktivitas = $request->aktivitas;
            $hadir->save();
            return redirect()->route('admin.kehadiran.index')
            ->with(['info' => 'Data berhasil di Edit!']);
        }
    
        
        public function destroy( $id)
        {
            $data = Hadir::findOrFail($id);
            $data->delete();
            return redirect()->route('admin.kehadiran.index')->with(['error' => 'Data berhasil di hapus!']);
        }
}
