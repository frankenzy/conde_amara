<?php

namespace App\Http\Controllers;

use App\Models\TypeProjet;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypeProjetRequest;

use App\Http\Requests\UpdateTypeProjetRequest;


class TypeProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $type_projets = DB::table('type_projets')->paginate(10);
        return view('apps.type_projets.index',compact('type_projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('apps.type_projets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypeProjetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeProjetRequest $request)
    {
        //





        $data = new TypeProjet([
            'libelle'=>$request->libelle,
            'domaine' =>$request->domaine,
        ]);

        $data->save();

        Session()->flash('notification.message','crée avec succès!');
        session()->flash('notification.type','succes' );

        return redirect()->route('typeProjet.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type_projet  $type_projet
     * @return \Illuminate\Http\Response
     */
    public function show($type_projet)
    {
        //
        $type_projet = TypeProjet::findOrFail($type_projet);

        return view('apps.type_projets.show',compact('type_projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeProjet  $type_projet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $type = TypeProjet::findOrFail($id);

        return view('apps.type_projets.edit',compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeProjetRequest  $request
     * @param  \App\Models\Type_projet  $type_projet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeProjetRequest $request, $type_projet)
    {
        //

        $type = TypeProjet::find($type_projet);

            $type->libelle = $request->libelle;
            $type->domaine = $request->domaine;

        $type->save();

        Session()->flash('notification.message','Mise à jour avec succès!');
        session()->flash('notification.type','succes' );

        return redirect()->route('typeProjet.index')->with('success','Mise à jour avec succès!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeProjet  $type_projet
     * @return \Illuminate\Http\Response
     */
    public function destroy($type_projet)
    {
        //

        $type_projet = TypeProjet::find($type_projet);

        $type_projet->delete();


        return redirect()->route('typeProjet.index')->with('success','Supprimé avec succès!');
    }
}
