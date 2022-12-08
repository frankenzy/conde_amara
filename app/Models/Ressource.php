<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    use HasFactory;

    protected $fillable = [
        'fournisseur_id',
        'libelle',
        'type',
        'montant',
        'quantite'
    ];


    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }
}
