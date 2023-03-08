@extends('layouts.admin')
@section('title')
Data User
@endsection
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Data User</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item"><a href="#">Data User</a></li>
        </ul>
      </div>
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
                <form action="" class="form-inline" method="get">
                  <input type="text" name="nama" class="form-control mb-2 mr-2" value="{{ request()->nama }}" placeholder="Cari Nama Pegawai">
                  {{-- <select name="limit" class="form-control mb-2 mr-2">
                    <option @if(request()->limit == 10) selected @endif>10</option>
                    <option @if(request()->limit == 20) selected @endif>20</option>
                    <option @if(request()->limit == 50) selected @endif>50</option>
                    <option @if(request()->limit == 100) selected @endif>100</option>
                    <option @if(request()->limit == 500) selected @endif>500</option>
                  </select> --}}
                  <button type="submit" class="btn btn-info mb-2"><i class="fa fa-search"></i></button>
                </form>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      {{-- <th>No</th> --}}
                      {{-- <th>Foto</th> --}}
                      <th>Nama</th>
                      <th>Role</th>
                      <th>Email</th>
                      <th>More</th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @php
                        $no=1 + (request()->limit ? intval(request()->limit) : 10) * ((request()->page ? intval(request()->page) : 1) - 1);
                    @endphp --}}
                    @foreach($user as $tampil)
                    <tr> 
                      
                    <td><a href="{{route('user.show', $tampil->id)}}">{{$tampil->name}}</a></td>
                      <td>{{$tampil->roleuser()->first()->name ?? ''}}</td>
                      {{-- <td>{{$tampil->tmpt_lahir}}, {{ Carbon\Carbon::parse($tampil->tgl_lahir)->isoFormat('DD MMMM Y')}}</td> --}}
                      <td>{{$tampil->email}}</td>
                      {{-- <td>
                        <a href="{{url('/user/'.$tampil->id.'/edit')}}"
                        class="btn btn-info"><span class="fa fa-edit (alias)"></span></a>

                      </td> --}}
                      <td>
                        <button class="btn btn-danger btn_modal_hapus" type="button" data-url="{{route('user.destroy', $tampil->id)}}" ><span class="fa fa-trash"></span></button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{-- {{ $pegawai->appends(request()->all())->links('pagination::bootstrap-4') }}    --}}
            </div>            
          </div>
        </div>
      </div>
    </main>
@endsection