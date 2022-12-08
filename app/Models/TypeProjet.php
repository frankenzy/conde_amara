<?php

namespace App\Models;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeProjet extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'domaine',
    ];

   public function projet(){

    return $this->hasMany(Projet::class);
   }
}
