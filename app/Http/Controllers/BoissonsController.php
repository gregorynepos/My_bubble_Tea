<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boisson;


class BoissonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boissons = Boisson::all();
    
        return view('admin.index', [
            'boissons' => $boissons
        ]); 
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.boissons');
    }
    
    public function boissons()
    {
        return view('boissons');
    }
    
    public function not_admin()
    {
        return view('not_admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|max:255|string',
            'ingredients' => 'required|string',
            'categorie' => 'required|string',
            'prix' => 'required|numeric',
            'description' => 'nullable|string',
        ]);
        
        // Enregistrement des données en base de données
        boisson::create($validatedData);

      
        // Redirection vers la liste des boissons après l'enregistrement
        return view('admin.ajout_boisson');
    }

    /**
     * Display the specified resource.
     */
    public function show(Boisson $boisson)
    {

        return view('admin.show', [
            'boisson' => $boisson
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Boisson $boisson)
    {
        return view('admin.edit', ['boisson' => $boisson]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boisson $boisson)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255|string',
            'ingredients' => 'required|string',
            'categorie' => 'required|string',
            'prix' => 'required|numeric',
            'description' => 'required|nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 

        ]);
    
        $boisson->nom = $validatedData['nom'];
        $boisson->ingredients = $validatedData['ingredients'];
        $boisson->categorie = $validatedData['categorie'];
        $boisson->prix = $validatedData['prix'];
        $boisson->description = $validatedData['description'];
    
        $boisson->save();
    
        return redirect()->route('admin.show', ['boisson' => $boisson->id]);
    }
     

  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boisson $boisson)
    {
        // Suppression de la boisson de la base de données
        $boisson->delete();

        // Redirection vers la liste des boissons après la suppression
        return redirect()->route('admin.index')->with('success', 'Boisson supprimée avec succès!');
    }
}
