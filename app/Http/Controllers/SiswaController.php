<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\SiswaView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Rombel;
use App\Models\Spp;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = SiswaView::all();

        return view('siswas.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rombel = Rombel::all();
        $spp = Spp::all();

        return view('siswas.create', compact('rombel','spp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn'=>'required',
            'nis'=>'required',
            'nama'=>'required',
            'id_rombel'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            'id_spp'=>'required',
        ]);

        Siswa::create($request->all());

        User::create([
            'name' => $request['nama'],
            'email' => $request['email'],
            'role' => 'siswa',
            'password' => Hash::make($request['nis']),
        ]);

        return redirect()->route('siswas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        $rombel = Rombel::all();
        $spp = Spp::all();
        // dd($siswa);
        $usr = User::where('name', $siswa->nama)->first();
        

        return view('siswas.edit', compact('siswa', 'rombel', 'spp', 'usr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $siswa->update($request->all());

        $s = User::where('email', $request->email)->delete();

        User::create([
            'name' => $request['nama'],
            'email' => $request['email'],
            'role' => 'siswa',
            'password' => Hash::make($request['nis']),
        ]);

        return redirect()->route('siswas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        
        return redirect()->route('siswas.index');
    }
}
