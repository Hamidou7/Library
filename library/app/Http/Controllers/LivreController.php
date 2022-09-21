<?php

namespace App\Http\Controllers;

use App\Models\livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $live =livre::all();
        return view('Fournisseur.index', compact('live'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Livre.create');
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
        $liv = $request->validate([
            'titre' => 'required',
            'desc'=> 'required',
            'editeur'=> 'required',
        ]);
        livre::create($liv);
        return view('Livre.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function show(livre $livre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function edit(livre $livre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, livre $livre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function destroy(livre $livre)
    {
        //
    }
}
