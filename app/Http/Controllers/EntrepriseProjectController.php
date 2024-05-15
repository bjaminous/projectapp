<?php

namespace App\Http\Controllers;

use App\Models\Choose;
use App\Models\Entreprise;
use App\Models\Project;
use Illuminate\Http\Request;

class EntrepriseProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *@param  \App\Models\Entreprise  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('chooses.index', compact('project','projets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        // Afficher le formulaire de création d'un nouveau projet
        //return view('chooses.create');
        $elements = Entreprise::all();
        $elements2 = Project::all();
        return view('chooses.create', compact('elements','elements2'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function select()
    {
        $elements = Entreprise::all();
        $elements2 = Project::all();
        return view('chooses.create', compact('elements','elements2'));

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
            'element' => 'required',
            'element2' => 'required'
        ]);

        $Modele = new Choose();
       $Modele->entreprise_id = $request->input('element'); // Récupère l'ID sélectionné dans la liste déroulante
       $Modele->project_id = $request->input('element2');

       $Modele->save();


        return redirect()->route('chooses.create')
            ->with('success', 'Project created successfully.');
    }

    /**
      * Display the specified resource.
     *
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd('yes');
        $entreprise = Entreprise::findOrFail($id);
        //dd($entreprise);
        // $projets = Project::latest()->paginate(1);
        $projets = $entreprise->projects; // Récupère les projets attribués à l'entreprise
        // dd($projets);

        return view('chooses.show', compact('entreprise', 'projets'))->with('i', (request()->input('page', 1) - 1) * 1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function edit(Choose $choose)
    {
        return view('chooses.edit', compact('project'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Choose $choose)
    {
        $request->validate([
            'name' => 'required',
            'introduction' => 'required',
            'location' => 'required',
            'cost' => 'required'
        ]);
        $choose->update($request->all());

        return redirect()->route('chooses.index')
            ->with('success', 'Project updated successfully');
    }

   /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function destroy(Choose $choose)
    {
        $project->delete();

        return redirect()->route('chooses.index')
            ->with('success', 'Project deleted successfully');
    }
}
