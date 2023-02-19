<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\TypeProjet;
use App\Models\Fournisseur;
use App\Models\Type_projet;
use App\Models\PorteurProjet;
use function Termwind\render;
use App\Models\Porteur_projet;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreProjetRequest;
use App\Http\Requests\UpdateProjetRequest;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projets = Projet::all();
        return view('apps.projets.index', compact('projets'));




    }


    /**
     * display a listing to home page
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $projets = Projet::all();

        return view('apps.home', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $porteur_projets = PorteurProjet::all();

        $type_projets = TypeProjet::all();

        return view('apps.projets.create', compact('porteur_projets','type_projets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjetRequest $request)
    {
        //
        $statuts ="";
        $investissement = $request->budget;
        $gain = $request->gain_annuelle;
        $duree = $request->duree;

        $benef = ($gain * $duree);
        $van = ($benef - $investissement);


        if($van > 0)
        {
            $statuts = "VALIDE";
        }else if($van < 0)
        {
            $statuts = "REJETE";
        }
        else
        {
            $statuts = "ATTENTE";
        }
        $projet = new Projet();
        $projet->create([
            'nom'=>$request->nom,
            'porteur_projet_id'=>$request->porteur_projet_id,

            'type_projet_id'=>$request->type_projet_id,
            'budget'=>$request->budget,
            'duree'=>$request->duree,
            'gain_annuelle'=>$request->gain_annuelle,
            'van'=>$van,
            'status'=>$statuts,

        ]);
       return redirect()->route('projet.index')->with('succes','Ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     * $table->string(" $table->string("
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show($projet)
    {
        //
        $projet = Projet::findOrFail($projet);
        return view('apps.projets.show', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit($projet)
    {
        //
        $projet = Projet::findOrFail($projet);
        return view('apps.projets.edit', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjetRequest  $request
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjetRequest $request, $projet)
    {
        //
        $projet = Projet::findOrFail($projet);

        $projet->van = $request->van;
        $projet->tri = $request->tri;
        $projet->status = $request->status;


        $projet->save();
        return redirect()->route('projet.index')->with('succes', 'Modifié avec succes');
    }

    /**$fake = Projet::get("status");
        echo $fake;
        dd();
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        //
        $projet->delete();

        return redirect()->route('projet.index')->with('succes', 'Modifié avec succes');
    }



}
