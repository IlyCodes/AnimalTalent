<?php

namespace App\Models;

use App\Models\Owner;
use App\Models\Competition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animals';

    protected $fillable = ['name', 'species', 'age', 'description', 'pet_photo', 'owner_id'];
    
    public function owner()
    {
        return $this->belongsTo(Owner::class, 'owner_id');
    }

    public function competitions()
    {
        return $this->belongsToMany(Competition::class, 'animal_competition');
    }
}