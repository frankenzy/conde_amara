<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\PorteurProjet;
use App\Models\Porteur_projet;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StorePorteurProjetRequest;
use App\Http\Requests\StorePorteur_projetRequest;
use App\Http\Requests\UpdatePorteurProjetRequest;
use App\Http\Requests\UpdatePorteur_projetRequest;

class PorteurProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $porteurs = PorteurProjet::all();
        return View('apps.porteur_projets.index',compact('porteurs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('apps.porteur_projets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePorteurProjetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePorteurProjetRequest $request)
    {
        //

        $data = new PorteurProjet([
            'nom'=>$request->nom,
            'prenom' =>$request->prenom,
            'contact' =>$request->contact,
        ]);

        $data->save();

        Session()->flash('notification.message','crée avec succès!');
        session()->flash('notification.type','succes' );

        return redirect()->route('porteurProjet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PorteurProjet  $porteur_projet
     * @return \Illuminate\Http\Response
     */
    public function show($porteur_projet)
    {
        //

        $porteur_projet = PorteurProjet::findOrFail($porteur_projet);

        $last = PorteurProjet::with('projet')->orderBy('nom', 'asc')->get();

        $total = PorteurProjet::withCount('projet')->get()->count();
        return View('apps.porteur_projets.show',compact('porteur_projet','total','last'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PorteurProjet  $porteur_projet
     * @return \Illuminate\Http\Response
     */
    public function edit($porteur_projet)
    {
        //

        $porteur = PorteurProjet::find($porteur_projet);

        return View('apps.porteur_projets.edit',compact('porteur'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePorteurProjetRequest  $request
     * @param  \App\Models\PorteurProjet  $porteur_projet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePorteurProjetRequest $request, $porteur_projet)
    {
        //
        $porteur = PorteurProjet::find($porteur_projet);
        $porteur->nom = $request->nom;
        $porteur->prenom =$request->prenom;
        $porteur->contact = $request->contact;

        $porteur->save();

        return redirect()->route('porteurProjet.index')->with('success',"mise à jour avec success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Porteur_projet  $porteur_projet
     * @return \Illuminate\Http\Response
     */
    public function destroy($porteur_projet)
    {
        //
        $porteur = PorteurProjet::find($porteur_projet);

        $porteur->delete();
        Session()->flash('notification.message','crée avec succès!');
        session()->flash('notification.type','danger' );

        return redirect()->route('porteurProjet.index');
    }
}
