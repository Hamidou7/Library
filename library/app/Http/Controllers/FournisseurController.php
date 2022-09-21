<?php

namespace App\Http\Controllers;

use App\Models\fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fourni = fournisseur::all();
        return view('Fournisseur.index', compact('fourni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Fournisseur.create');
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
        $fou = $request->validate([
            'nom' => 'required',
            'prenom'=> 'required',
            'entreprise'=> 'required',
            'contact'=> 'required',
            'adresse'=> 'required',
        ]);
        fournisseur::create($fou);
        return view('Abonne.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function show(fournisseur $fournisseur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function edit(fournisseur $fournisseur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fournisseur $fournisseur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy(fournisseur $fournisseur)
    {
        //
    }
}
