<?php

namespace App\Models;

use App\Models\Judge;
use App\Models\Animal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date', 'winner', 'finished', 'judge_id'];

    public function animals()
    {
        return $this->belongsToMany(Animal::class, 'animal_competition');
    }

    public function judge()
    {
        return $this->belongsTo(Judge::class, 'judge_id');
    }

}