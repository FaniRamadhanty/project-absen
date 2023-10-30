@extends('layouts.master')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                
                    <form action=" {{ route('pegawai.store') }} " method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">

                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                <label for="">Masukkan Id Pegawai</label>
                                <input type="number" class="form-control" name="id" required>
                                @if ($errors->has('id'))
                                <span class="text-danger">{{ $errors->first('id') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Masukkan Nama Pegawai</label>
                                <input type="text" class="form-control" name="nama" required>
                                @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Masukkan Jenis Kelamin</label>
                                <input type="radio" id="pria" name="jk" value="pria">
                                <label for="pria">Pria</label>
                                <br>
                                <input type="radio" id="wanita" name="jk" value="wanita">
                                <label for="wanita">Wanita</label>
                                @if ($errors->has('jk'))
                                <span class="text-danger">{{ $errors->first('jk') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Masukkan Bagian</label>
                                <input type="text" class="form-control" name="bagian" required>
                                @if ($errors->has('bagian'))
                                <span class="text-danger">{{ $errors->first('bagian') }}</span>
                                @endif
                            </div>
                        <div class="form-group">
                            <button class="btn btn-primary"  type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection