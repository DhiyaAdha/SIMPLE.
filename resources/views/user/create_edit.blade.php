@extends('layouts.admin')
@section('title')
    {{ isset($user) ? 'Edit' : 'Tambah' }} User
@endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> {{ isset($user) ? 'Edit' : 'Tambah' }} user</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">user</li>
                <li class="breadcrumb-item"><a href="#">{{ isset($user) ? 'Edit' : 'Tambah' }} user</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">

                    <div class="tile-body">
                        @if (isset($user))
                        <form class="form-horizontal" action="{{ route('user.update', $user->id) }}"
                            method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                        @else
                            {{-- buat pegawai --}}
                            <form class="form-horizontal" action="{{ route('user.store') }}" method="post">
                                {{ csrf_field() }}
                    @endif

                    @php
                        // dd($pegawai)
                    @endphp
\

                        {{-- <div class="form-group row">
                            <label class="control-label col-md-3">Alamat</label>
                            <div class="col-md-8">
                                <textarea required class="form-control" rows="4" name="alamat">{{ isset($pegawai) ? $pegawai->alamat : '' }}</textarea>
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-8">
                                <input required class="form-control" type="text" name="name"
                                    value="{{ isset($user) ? $user->name : '' }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3">Akun Email </label>
                            <div class="col-md-8">
                                <input required class="form-control" type="text" name="email"
                                    value="{{ isset($user) ? $user->email : '' }}">
                            </div>
                          </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3"> Password </label>
                            <div class="col-md-8">
                                <input required class="form-control" type="text" name="password"
                                    value="{{ isset($user) ? $user->password : '' }}">
                            </div>
                          </div>
                        
                        {{-- <div class="form-group row">
                            <label class="control-label col-md-3">Foto</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" type="file" name="foto"
                                value="{{ isset($pegawai) ? $pegawai->foto : '' }}">
                            </div>
                        </div> --}}
{{--                         
                        <div class="form-group row">
                            <label class="control-label col-md-3">Nomor HP</label>
                            <div class="col-md-8">
                                <input required class="form-control" type="number" name="nohp"
                                value="{{ isset($pegawai) ? $pegawai->nohp : '' }}">
                            </div>
                        </div> --}}
                        
                        <div class="form-group row">
                            <label class="control-label col-md-3">Jenis User</label>
                            <div class="col-md-8">
                                <select class="form-control" name="role_user_id" id="exampleSelect1">
                                    {{-- <option selected>Pilih Jenis User </option>     --}}
                                    <option value="2">Admin</option>
                                    <option value="3">Karyawan</option>
                                    <option value="4">Penghuni</option>
                                    
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
