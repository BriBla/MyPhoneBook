<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');

        $entreprise = Entreprise::query()
            ->where('Nom', 'LIKE', "{$search}%")
            ->orwhere('Ville', 'LIKE', "{$search}%")
            ->orwhere('Email', 'LIKE', "{$search}%")
            ->get();

        return view('entreprise', compact('entreprise'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprise = DB::table('entreprises');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'ajouté';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nom'=>'required',
            'Rue'=>'required',
            'CodePostal'=>'required',
            'Ville'=>'required',
            'Email',
        ]);

        $entreprise = new entreprise([
            'Nom' => $request->get('Nom'),
            'Rue' => $request->get('Rue'),
            'CodePostal' => $request->get('CodePostal'),
            'Ville' => $request->get('Ville'),
            'Numéro' => $request->get('Numéro'),
            'Email' => $request->get('Email'),
        ]);
        $entreprise->save();
        return redirect ('/entreprise')->with('success', 'Entreprise enregistrée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entreprise= Entreprise::find($id);
        return view('showEntreprise', compact('entreprise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entreprises = Entreprise::all();
        $entreprise = Entreprise::find($id);
        return view('updateEntreprise', compact('entreprises', 'entreprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $entreprise = Entreprise::find($id);
        $entreprise->Nom = $input['Nom'];
        $entreprise->Rue = $input['Rue'];
        $entreprise->Codepostal = $input['CodePostal'];
        $entreprise->Ville = $input['Ville'];
        $entreprise->Numéro = $input['Numéro'];
        $entreprise->Email = $input['Email'];
        $entreprise->save();
        
        return redirect ('/entreprise')->with('success', 'Entreprise modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entreprise= Entreprise::find($id);
        $entreprise->delete();
        return redirect('/entreprise')->with('success', 'Entreprise supprimée');
    }
}
