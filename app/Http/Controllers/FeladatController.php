<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeladatRequest;
use App\Models\Feladat;
use Illuminate\Http\Request;

class FeladatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feladatok = Feladat::orderBy('nev')->get();
        return view('feladatok.index', [
            'feladatok' => $feladatok
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feladatok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeladatRequest $request)
    {
        $adatok = $request->only(['nev','feladat_url','szoveges_ertekeles', 'pontszam']);
        $feladat = new Feladat();
        $feladat->fill($adatok);
        $feladat->save();
        return redirect()->route('feladatok.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feladat  $feladat
     * @return \Illuminate\Http\Response
     */
    public function show(Feladat $feladat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feladat  $feladat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feladat = Feladat::find($id);
        return view('feladatok.edit', ['feladat' => $feladat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feladat  $feladat
     * @return \Illuminate\Http\Response
     */
    public function update(FeladatRequest $request, $id)
    {
        $feladat= Feladat::find($id);
        $adatok = $request->only(['nev','feladat_url','szoveges_ertekeles', 'pontszam']);
        $feladat->fill($adatok);
        $feladat->save();
        return redirect()->route('feladatok.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feladat  $feladat
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $feladat = Feladat::find($id);
        $feladat->delete();
        return redirect()->route('feladatok.index');
    }
}
