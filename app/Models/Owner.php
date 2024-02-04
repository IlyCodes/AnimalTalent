<?php

namespace App\Models;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Owner extends Model
{
    use HasFactory;
    
    protected $fillable = ['firstname', 'lastname', 'email', 'phone', 'about', 'photo'];

    public function animals()
    {
        return $this->hasMany(Animal::class, 'owner_id');
    }
}