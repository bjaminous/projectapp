<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Choose;
use App\Models\Project;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Entreprise::latest()->paginate(5);

        return view('entreprises.index', compact('project'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('entreprises.create');
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
            'name' => 'required',
            'location' => 'required',
        ]);

        Entreprise::create($request->all());

        return redirect()->route('entreprises.index')
            ->with('success', 'Entreprise created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprise  $projects
     * @return \Illuminate\Http\Response
     */

     public function show($id)
     {

         $entreprise = Entreprise::findOrFail($id);
         $projets = $entreprise->projects; // Récupère les projets attribués à l'entreprise
         $projets = PROJECT::latest()->paginate(5);

         return view('chooses.index', compact('entreprise', 'projets'))
         ->with('i', (request()->input('page', 1) - 1) * 5);
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprise  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Entreprise::findOrFail($id);
        // dd($project);
        return view('entreprises.edit', compact('project'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entreprise  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
        ]);
        $project=Entreprise::find($id);
        $project->update($request->all());

        return redirect()->route('entreprises.index')
            ->with('success', 'Entreprise updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprise  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=Entreprise::find($id);

        $project->delete();

        return redirect()->route('entreprises.index')
            ->with('success', 'Entreprise deleted successfully');
    }

}
