<?php

namespace App\Models;

use App\Models\Personnel;


use App\Models\Ressource;
use App\Models\TypeProjet;
use App\Models\PorteurProjet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projet extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom',
        'porteur_projet_id',
        'type_projet_id',
        'van',
        'tri',
        'fin_projet',
        'debut_projet',
        'budget'
    ];
    public function typeProjet(){

        return $this->belongsTo(TypeProjet::class);
    }

    public function porteurProjet(){
        return $this->belongsTo(PorteurProjet::class);
    }

    public function personnel()
    {
        return $this->belongsToMany(Personnel::class);
    }

    public function ressource()
    {
        return $this->belongsToMany(Ressource::class);
    }
}
