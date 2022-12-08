<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreFournisseurRequest;
use App\Http\Requests\UpdateFournisseurRequest;

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
        $fournisseurs = Fournisseur::all();
        return view('apps.fournisseurs.index', compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('apps.fournisseurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFournisseurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFournisseurRequest $request)
    {
        //


        $data = Request::all();



        Fournisseur::create($data);

        // $data = new Fournisseur(
        //     [
        //         'nom' => $request->nom,
        //         'prenom' => $request->prenom,
        //         'contact' => $request->contact,
        //         'email' => $request->email,
        //     ]
        //     );
        // $data->save();
        return redirect()->route('fournisseur.index')->with('succes', 'Ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function show($fournisseur)
    {
        //
        $fournisseur = Fournisseur::findOrFail($fournisseur);
        $last = Fournisseur::with('ressource')->orderBy('libelle', 'asc')->get();

        $total = Fournisseur::withCount('ressource')->get();
        return view('apps.fournisseurs.show', compact('fournisseur', 'total', 'last'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function edit($fournisseur)
    {
        //
        $fournisseur = Fournisseur::findOrFail($fournisseur);
        // $fournisseur = $this->getRessources($fournisseur);
        return view('apps.fournisseurs.edit', compact('fournisseur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFournisseurRequest  $request
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFournisseurRequest $request, $fournisseur)
    {
        //
        $fournisseur = Fournisseur::findOrFail($fournisseur);

        $fournisseur->nom = $request->nom;
        $fournisseur->prenom = $request->prenom;
        $fournisseur->email = $request->email;
        $fournisseur->contact = $request->contact;

        $fournisseur->save();
        return redirect()->route('apps.fournisseurs.index')->with('succes', 'Modifié avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy($fournisseur)
    {
        //
        $fournisseur = Fournisseur::findOrFail($fournisseur);

        $fournisseur->destroy();
        return redirect()->route('apps.fournisseurs.index')->with('succes', 'Supprime avec succes');
    }
}
