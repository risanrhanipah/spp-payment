<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;
 
class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spps = Spp::all();

        return view('spps.index', compact('spps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spp = Spp::all();

        return view('spps.create', compact('spp'));
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
            'awal'=> 'required',
            'nominal'=> 'required',
        ]);

        Spp::create([
            'tahun' => $request->awal.($request->awal+3),
            'nominal' => $request->nominal
        ]);

        return redirect()->route('spps.index');
    }
 
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function edit(Spp $spp)
    {
        return view('spps.edit', compact('spp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spp $spp)
    {

        $spp->update([
            'tahun' => $request->awal.($request->awal+3),
            'nominal' => $request->nominal 
        ]);

        return redirect()->route('spps.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spp $spp)
    {
        $spp->delete();
        
        return redirect()->route('spps.index');
    }
}
