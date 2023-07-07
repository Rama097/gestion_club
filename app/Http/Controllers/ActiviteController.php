<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activites = Activite::all();
        return view('activites.index', compact('activites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        Activite::create($request->all());

        return redirect()->route('activites.index')->with('success', 'Activites créé avec succès.');
    }

    /*
     Display the specified resource.
     
    public function show(Activite $activite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activite $activite)
    {
        return view('activites.edit', compact('activite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activite $activite)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        $activite->update($request->all());

        return redirect()->route('activites.index')->with('success', 'Activites mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activite $activite)
    {
        $activite->delete();

        return redirect()->route('clubs.index')->with('success', 'Club supprimé avec succès.');
    }
}
