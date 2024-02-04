<?php

namespace App\Models;

use App\Models\Competition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Judge extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'expertise'];

    public function competitions()
    {
        return $this->hasMany(Competition::class, 'judge_id');
    }
}