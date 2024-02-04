<?php

namespace App\Http\Controllers;

use App\Models\Judge;
use App\Models\Animal;
use App\Models\Competition;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function animals()
    {
        $animals = Animal::all();
        return view('admin.animals', compact('animals'));
    }

    public function competitions()
    {
        $competitions = Competition::all();
        return view('admin.competitions', compact('competitions'));
    }

    public function judges()
    {
        $judges = Judge::all();
        return view('admin.judges', compact('judges'));
    }

    /**
     * Show the form for creating new competition.
     */
    public function createCompetition()
    {
        $judges = Judge::all();
        return view('admin.createCompetition', compact('judges'));
    }
    
    /**
     * Store competition resources in storage.
     */
    public function storeCompetition(Request $request)
    {
        Competition::create($request->all());
        return to_route('admin_competitions');
    }

    /**
     * Show the form for editing the competition resource.
     */
    public function editCompetition(string $id)
    {
        $competitionData = Competition::find($id);
        $judges = Judge::all();
        $judge = Judge::find($competitionData->judge_id);
        return view('admin.editCompetition', compact('competitionData', 'judges', 'judge'));
    }

    /**
     * Update the competition resource in storage.
     */
    public function updateCompetition(Request $request, string $id)
    {
        $competition = Competition::find($id);
        $competitionData = $request->all();
        $competition->update($competitionData);
        

        return to_route('admin_competitions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function animalDestroy(string $id)
    {
        $animal = Animal::find($id);
        $animal->competitions()->detach();
        $animal->delete();
        
        return to_route('animals');
    }

    public function competitionDestroy(string $id)
    {
        $competition = Competition::find($id);
        $competition->animals()->detach();
        $competition->delete();
        
        return to_route('admin_competitions');
    }

    public function judgeDestroy(string $id)
    {
        $judge = Judge::find($id);
        $judge->delete();
        
        return to_route('judges');
    }
}
