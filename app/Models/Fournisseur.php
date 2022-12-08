<?php

namespace App\Models;

use App\Models\Ressource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'contact',
        'email'
    ];

    public function ressource()
    {
        return $this->hasMany(Ressource::class);
    }
}
