<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('admin.pegawai.index',compact('pegawais'));
    }

    public function create()
    {
        return view('admin.pegawai.create');
    }

    public function store(Request $request)
    {
        

        $pegawai = new Pegawai();
        $pegawai->id = $request->id;
        $pegawai->nama = $request->nama;
        $pegawai->jk = $request->jk;
        $pegawai->bagian = $request->bagian;
        $pegawai->save();
        return redirect()->route('pegawai.index')
        ->with(['success' => 'Data berhasil di input!']);
    }
    
    public function show($id)
    {
        $pegawai = Pegawai::findOrfail($id);
        return view('admin.pegawai.show',compact('pegawai'));

    }
    public function edit($id)
    {
        $pegawai = Pegawai::findOrfail($id);
        return view('admin.pegawai.edit',compact('pegawai'));
        
    }


    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::findOrfail($id);
        $pegawai->id_pegawai = $request->id_pegawai;
        $pegawai->nama = $request->nama;
        $pegawai->jk = $request->jk;
        $pegawai->bagian = $request->bagian;
        $pegawai->save();
        return redirect()->route('pegawai.index')
        ->with(['info' => 'Data berhasil di Edit!']);
    }
    public function destroy($id)
    {
        $pegawai = Pegawai::findOrfail($id);
        $pegawai->delete();
        return redirect()->route('pegawai.index')
        ->with(['error' => 'Data berhasil di hapus!']);
    }

    
}
