<?php

namespace App\Http\Controllers;

use App\Models\abonne;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abonne = abonne::all();
        return view('Abonne.index', compact('abonne'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Abonne.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Abonn = $request->validate([
            'nom' => 'required',
            'prenom'=> 'required'
        ]);
        abonne::create($Abonn);
        return view('Abonne.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function show(abonne $abonne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function edit(abonne $abonne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, abonne $abonne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $abonn = abonne::findOrFail($id);
         $abonn->delete();
        return redirect('Offre');
    }
}
