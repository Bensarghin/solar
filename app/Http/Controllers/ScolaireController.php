<?php

namespace App\Http\Controllers;

use App\Models\Scolaire;
use App\Http\Requests\StoreScolaireRequest;
use App\Http\Requests\UpdateScolaireRequest;

class ScolaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreScolaireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScolaireRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scolaire  $scolaire
     * @return \Illuminate\Http\Response
     */
    public function show(Scolaire $scolaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scolaire  $scolaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Scolaire $scolaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScolaireRequest  $request
     * @param  \App\Models\Scolaire  $scolaire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScolaireRequest $request, Scolaire $scolaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scolaire  $scolaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scolaire $scolaire)
    {
        //
    }
}
