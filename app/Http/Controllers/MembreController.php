<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membres = Membre::all();
        return view('membres.index', compact('membres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('membres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        Membre::create($request->all());

        return redirect()->route('membres.index')->with('success', 'Membre créé avec succès.');
    }
    

    /*
      Display the specified resource.
     
    public function show(Membre $membre)
    {
        
    }

   
     Show the form for editing the specified resource.
     */
    public function edit(Membre $membre)
    {
        return view('membres.edit', compact('membre')); 
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Membre $membre)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        $membre->update($request->all());

        return redirect()->route('membres.index')->with('success', 'Membre mis à jour avec succès.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Membre $membre)
    {
        $membre->delete();

        return redirect()->route('membres.index')->with('success', 'Membre supprimé avec succès.');
    }
}
