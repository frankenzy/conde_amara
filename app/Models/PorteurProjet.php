<?php

namespace App\Models;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PorteurProjet extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'contact',
    ];
    public function projet(){

        return $this->hasMany(Projet::class);
       }
}
