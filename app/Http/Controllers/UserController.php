<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        
        // $user = User::orderBy('nama','desc');
        // if (request()->nama) {
        //     $user = $user->where('nama','like','%'.request()->nama.'%');
        // }
        // $limit = 10;
        // if (request()->limit) {
        //     $limit = request()->limit;
        // }
        // $user = $user->paginate($limit);

        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request ->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_user_id = $request ->role_user_id;
        // dd($user);
        $user->save();

        return redirect('user')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $role = Role::all();
        return view ('user.show', compact('user','role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data['user'] = $user;
        $data['role'] = User::all();

        return view('user.create_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request ->name;
        $user->email = $request ->email;
        $user->password = $request ->password;
        $user->role_user_id = $request ->role_user_id;
        // $pegawai->agama_id = $request ->agama_id;
        // $pegawai->negara_id = $request ->negara_id;
        // $pegawai->gol_darah_id = $request ->gol_darah_id;
        // $pegawai->skeluarga_id = $request ->skeluarga_id;
        // $pegawai->foto = $request ->foto;
        // $pegawai->alamat = $request ->alamat;    
            
            // dd($user);
        $user->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('error', 'Data berhasil dihapus');
    }
}
