<?php

namespace App\Http\Controllers;

use App\Models\Ressource;
use App\Models\Fournisseur;
use App\Policies\RessourcePolicy;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreRessourceRequest;
use App\Http\Requests\UpdateRessourceRequest;

class RessourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $ressources = Ressource::all();
        return view('apps.ressources.index',compact('ressources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $fournisseurs = Fournisseur::all();
        return view('apps.ressources.create',compact('fournisseurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRessourceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRessourceRequest $request)
    {
        $data = Request::all();
        Ressource::create($data);
        return redirect()->route('ressource.index')->with('succes','Ajouté avec succès!');
    }

    /**
     * Display the    d   dd('ok');d('ok');   dd('ok');ified resource.
     *
     * @param  \App\Models\Ressource  $ressource
     * @return \Illuminate\Http\Response
     */
    public function show($ressource)
    {
        //
        $ressource = Ressource::findOrFail($ressource);

        return view('apps.ressources.show',compact('ressource'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ressource  $ressource
     * @return \Illuminate\Http\Response
     */
    public function edit($ressource)
    {
        //
        $ressource = Ressource::findOrFail($ressource);
        $fournisseurs =Fournisseur::all();

        return view('apps.ressources.edit',compact('ressource','fournisseurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRessourceRequest  $request
     * @param  \App\Models\Ressource  $ressource
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRessourceRequest $request, $ressource)
    {
        //

        $data = Ressource::findOrFail($ressource);
        $data->type = $request->type;
        $data->fournisseur_id = $request->fournisseur_id;
        $data->libelle = $request->libelle;
        $data->montant = $request->montant;
        $data->quantite = $request->quantite;
        $data->save();


        return redirect()->route('ressource.index')->with('succes','Ajouté avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ressource  $ressource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ressource $ressource)
    {
        //
        $ressource->delete();
        return redirect()->back();
    }
}
