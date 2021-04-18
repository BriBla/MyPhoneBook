<?php

namespace App\Http\Controllers;

use App\Models\Collaborateurs;
use Illuminate\Http\Request;

class CollaborateurController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');

        $collaborateur = Collaborateurs::query()
            ->where('Nom', 'LIKE', "{$search}%")
            ->orwhere('Prénom', 'LIKE', "{$search}%")
            ->orwhere('Entreprise', 'LIKE', "{$search}%")
            ->orwhere('Numéro', 'LIKE', "{$search}%")
            ->orwhere('Email', 'LIKE', "{$search}%")
            ->get();

        return view('/collaborateur', compact('collaborateur'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collaborateur = DB::table('collaborateurs');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'civilité'=>'required',
            'Nom'=>'required',
            'Prénom'=>'required',
            'Rue'=>'required',
            'CodePostal'=>'required',
            'Ville'=>'required',
            'Email'=>'required',
            'Entreprise'=>'required'
        ]);

        $collaborateur= new collaborateurs([
            'civilité' => $request->get('civilité'),
            'Nom' => $request->get('Nom'),
            'Prénom' => $request->get('Prénom'),
            'Rue' => $request->get('Rue'),
            'CodePostal' => $request->get('CodePostal'),
            'Ville' => $request->get('Ville'),
            'Numéro' => $request->get('Numéro'),
            'Email' => $request->get('Email'),
            'Entreprise' => $request->get('Entreprise'),
        ]);
        $collaborateur->save();
        return redirect ('/collaborateur')->with('success', 'Collaborateur enregistrée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collaborateurs  $collaborateurs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collaborateur= Collaborateurs::find($id);
        return view('showCollaborateur', compact('collaborateur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collaborateurs  $collaborateurs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collaborateurs = Collaborateurs::all();
        $collaborateur = Collaborateurs::find($id);
        return view('updateCollaborateur', compact('collaborateurs', 'collaborateur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collaborateurs  $collaborateurs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $collaborateur = Collaborateurs::find($id);
        $collaborateur->civilité = $input['civilité'];
        $collaborateur->Nom = $input['Nom'];
        $collaborateur->Prénom = $input['Prénom'];
        $collaborateur->Rue = $input['Rue'];
        $collaborateur->Codepostal = $input['CodePostal'];
        $collaborateur->Ville = $input['Ville'];
        $collaborateur->Numéro = $input['Numéro'];
        $collaborateur->Email = $input['Email'];
        $collaborateur->Entreprise = $input['Entreprise'];
        $collaborateur->save();
        
        return redirect ('/collaborateur')->with('success', 'Collaborateur modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collaborateurs  $collaborateurs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collaborateur= Collaborateurs::find($id);
        $collaborateur->delete();
        return redirect('/collaborateur')->with('success', 'Collaborateur supprimé');
    }
}
