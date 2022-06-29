<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = Petugas::all();

        return view('petugass.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugass.create');
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
            'username' => 'required',
            'password' => 'required',
            'nama_petugas' => 'required',
        ]);

        Petugas::create($request->all()); 

        return redirect()->route('petugas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petuga  $petuga
     * @return \Illuminate\Http\Response
     */
    public function show(Petuga $petuga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petuga  $petuga
     * @return \Illuminate\Http\Response
     */
    public function edit( $petugas)
    {
        $a = Petugas::find($petugas);
        return view('petugass.edit', compact('a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petuga  $petuga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $petugas)
    {
        $a = Petugas::find($petugas);
        $a->update($request->all());

        return redirect('/petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petuga  $petuga
     * @return \Illuminate\Http\Response
     */
    public function destroy($petugas)
    {
        $a = Petugas::find($petugas);    
        $a->delete();
        
        return redirect('/petugas');
    }
}
