@extends('layouts.admin')
@section('title')
    {{ isset($pegawai) ? 'Edit' : 'Tambah' }} Pegawai
@endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> {{ isset($pegawai) ? 'Edit' : 'Tambah' }} Receptionist</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Receptionist</li>
                <li class="breadcrumb-item"><a href="#">{{ isset($pegawai) ? 'Edit' : 'Tambah' }} Receptionist</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">

                    <div class="tile-body">
                        @if (isset($pegawai))
                            <form class="form-horizontal" action="{{ route('pegawai.update', $pegawai->id) }}"
                                method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                            @else
                                {{-- buat pegawai --}}
                                <form class="form-horizontal" action="{{ route('pegawai.store') }}" method="post">
                                    {{ csrf_field() }}
                        @endif

                        @php
                            // dd($pegawai)
                        @endphp

                        <div class="form-group row">
                            <label class="control-label col-md-3">NIP</label>
                            <div class="col-md-8">
                                <input required class="form-control col-md-8" type="number" name="nip"
                                    value="{{ isset($pegawai) ? $pegawai->nip : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-8">
                                <input required class="form-control" type="text" name="nama"
                                    value="{{ isset($pegawai) ? $pegawai->nama : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Tempat Lahir</label>
                            <div class="col-md-8">
                                <input required class="form-control col-md-8" type="text" name="tmpt_lahir"
                                    value="{{ isset($pegawai) ? $pegawai->tmpt_lahir : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Tanggal Lahir</label>
                            <div class="col-md-8">
                                <input required class="form-control col-md-8" type="date" name="tgl_lahir"
                                    value="{{ isset($pegawai) ? $pegawai->tgl_lahir : '' }}">
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label class="control-label col-md-3">Alamat</label>
                            <div class="col-md-8">
                                <textarea required class="form-control" rows="4" name="alamat">{{ isset($pegawai) ? $pegawai->alamat : '' }}</textarea>
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label class="control-label col-md-3">Jenis Kelamin</label>
                            <div class="col-md-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input required class="form-check-input" type="radio" class="sr-only"
                                            name="jenis_kelamin" value="Laki-laki"
                                            {{ isset($pegawai) && $pegawai->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input required class="form-check-input" type="radio" class="sr-only"
                                            name="jenis_kelamin" value="Perempuan"
                                            {{ isset($pegawai) && $pegawai->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                          <label class="control-label col-md-3">Email  </label>
                          <div class="col-md-8">
                              <input required class="form-control" type="text" name="email"
                                  value="{{ isset($pegawai) ? $pegawai->email : '' }}">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="control-label col-md-3">Password </label>
                          <div class="col-md-8">
                              <input required class="form-control" type="text" name="password"
                                  value="{{ isset($pegawai) ? $pegawai->password : '' }}">
                          </div>
                        </div>
                        
                        
                        {{-- <div class="form-group row">
                            <label class="control-label col-md-3">Foto</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" type="file" name="foto"
                                value="{{ isset($pegawai) ? $pegawai->foto : '' }}">
                            </div>
                        </div> --}}
                        
                        <div class="form-group row">
                            <label class="control-label col-md-3">Nomor HP</label>
                            <div class="col-md-8">
                                <input required class="form-control" type="number" name="nohp"
                                value="{{ isset($pegawai) ? $pegawai->nohp : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Jenis Enginering</label>
                            <div class="col-md-8">
                                <select class="form-control" name="role_id" id="exampleSelect1">
                                    {{-- <option selected>Pilih Jenis Karyawan </option> --}}
                                    <option value="1">teknisi-listrik</option>
                                    <option value="2">teknisi-mesin</option>
                                    <option value="3">IT-Support</option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
                                <a class="btn btn-secondary" href="#"><i
                                        class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                            </div>

                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection
