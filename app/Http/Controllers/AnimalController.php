<?php

namespace App\Http\Controllers;

use App\Models\Judge;
use App\Models\Owner;
use App\Models\Animal;
use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::latest()->paginate(10);
        return view('animal.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ownerData = $request->validate([
            'firstname' => 'required | string | max:25',
            'lastname' => 'required | string | max:25 ',
            'email' => 'required | max:255 | unique:owners',
            'phone' => 'required | max:20',
            'about' => 'max:300',
            'photo' => 'required | image | mimes:jpeg,png,jpg | max:2048'
        ]);

        $file = $request->file('photo');
        $path = $this->uploads($file);

        $ownerData['photo'] = '/storage/' . $path;

        $owner = Owner::create($ownerData);
        $ownerID = $owner->id;

        $animalData = $request->validate([
            'name' => 'required | string',
            'species' => 'required | string',
            'age' => 'required',
            'description' => 'required',
            'pet_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $file = $request->file('pet_photo');
        $path = $this->uploads($file);

        $animalData['pet_photo'] = '/storage/' . $path;

        $animalData['owner_id'] = $ownerID;
        
        Animal::create($animalData);

        return to_route('animals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $animal = Animal::with('competitions')->find($id);
        return view('animal.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $animal = Animal::find($id);
        return view('animal.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $animal = Animal::find($id)->with('owner');
        $owner_id = $animal->owner_id;
        $owner = Owner::find($owner_id);

        $ownerData = $request->validate([

            'firstname' => 'required | string | max:25',
            'lastname' => 'required | string | max:25 ',
            'email' => 'required | unique | max:255',
            'phone' => 'required | max:20',

        ]);

        $animalData = $request->validate([
            'name' => 'required | string',
            'species' => 'required | string',
            'age' => 'required',
            'description' => 'required',
        ]);

        $owner->update($ownerData);
        $animal->update($animalData);

        return to_route('animal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $animal = Animal::find($id)->with('owner');
        $owner_id = $animal->owner_id;
        $owner = Owner::find($owner_id);

        $animal->delete();
        $owner->delete();

        return to_route('animal.index');
    }

    /**
     * Display Profil of Owner.
     */
    public function ownerIndex($id)
    {   
        $owner = Owner::where('id', $id)->first();
        $animals = Animal::where('owner_id', $id)->get();
        return view('animal.owner', compact('owner', 'animals'));
    }
    
    public function owners()
    {   
        $owners = Owner::all();
        $animals = Animal::all();

        return view('animal.owners', compact('owners', 'animals'));
    }
    
    /**
     * Show the form for adding a new animal.
     */
    public function addNewAnimal()
    {
        return view('animal.addAnimal');
    }

    /**
     * Store a newly added animal in storage.
     */
    public function addAnimal(Request $request)
    {
        $verifData = $request->validate([
            'firstname' => 'required | string | max:25',
            'email' => 'required | max:255',
        ]);

        $ownerData = Owner::where('firstname', $verifData['firstname'])->where('email', $verifData['email'])->first();
        
        $ownerID = $ownerData->id;

        $animalData = $request->validate([
            'name' => 'required | string',
            'species' => 'required | string',
            'age' => 'required',
            'description' => 'required',
            'pet_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $file = $request->file('pet_photo');
        $path = $this->uploads($file);

        $animalData['pet_photo'] = '/storage/'.$path;

        $animalData['owner_id'] = $ownerID;
        
        Animal::create($animalData);

        return to_route('animals.index');
    }

    /**
     * Upload file resource.
     */
    private function uploads($file)
    {
        $fileName = time() . $file->getClientOriginalName();
        return $file->storeAs('images', $fileName, 'public');
    }

    /**
     * Search for Owner or Animal.
     */
    public function search(Request $request)
    {
        $searchBy = $request->searchBy;
        $searchFor = $request->searchFor;

        if ($searchBy == 'Animal')
        {
            $animals = Animal::where('name', $searchFor)->paginate(25);
            return view('animal.index', compact('animals'));
        }
        else{
            $owner = Owner::where('firstname', $searchFor)->first();
            $ownerID = $owner->id;
            $animals = Animal::where('owner_id', $ownerID)->latest()->paginate(20);
            return view('animal.index', compact('animals'));
        }
        
    }

    /**
     * Display Competitions.
     */
    public function competitions()
    {
        $competitions = Competition::with('judge')->with('animals')->withCount('animals')->get();
        return view('animal.competitions', compact('competitions'));
    }

    /**
     * Display the competition infos.
     */
    public function showCompetition(string $id)
    {
        $competition = Competition::find($id);
        return view('animal.competition', compact('competition'));
    }

    /**
     * Show the form for creating a new judge.
     */
    public function createJudge()
    {
        return view('animal.createJudge');
    }

    /**
     * Store new judge in storage.
     */
    public function storeJudge(Request $request)
    {
        $judgeData = $request->validate([
            'firstname' => 'required | string | max:25',
            'lastname' => 'required | string | max:25 ',
            'expertise' => 'required',
        ]);

        Judge::create($judgeData);
        return to_route('welcome');
    }

    /**
     * Display the judge infos.
     */
    public function showJudge(string $id)
    {
        $judge = Judge::with('competitions')->find($id);
        return view('animal.judge', compact('judge'));
    
    }

}
