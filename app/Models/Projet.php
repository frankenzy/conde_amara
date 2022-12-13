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

    private $nom;
    private $porteur_projet_id;
    private $type_projet_id;
    private $van;
    private $tri;
    private $budget;
    private $duree;
    private $gain_annuelle;


    protected $fillable = [
        'nom',
        'porteur_projet_id',
        'type_projet_id',
        'van',
        'tri',
        'budget',
       'duree',
       'status',
       'gain_annuelle',
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



    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of porteur_projet_id
     */
    public function getPorteurProjetId()
    {
        return $this->porteur_projet_id;
    }

    /**
     * Set the value of porteur_projet_id
     */
    public function setPorteurProjetId($porteur_projet_id): self
    {
        $this->porteur_projet_id = $porteur_projet_id;

        return $this;
    }

    /**
     * Get the value of type_projet_id
     */
    public function getTypeProjetId()
    {
        return $this->type_projet_id;
    }

    /**
     * Set the value of type_projet_id
     */
    public function setTypeProjetId($type_projet_id): self
    {
        $this->type_projet_id = $type_projet_id;

        return $this;
    }

    /**
     * Get the value of van
     */
    public function getVan()
    {
        return $this->van;
    }

    /**
     * Set the value of van
     */
    public function setVan($van): self
    {
        $this->van = $van;

        return $this;
    }

    /**
     * Get the value of tri
     */
    public function getTri()
    {
        return $this->tri;
    }

    /**
     * Set the value of tri
     */
    public function setTri($tri): self
    {
        $this->tri = $tri;

        return $this;
    }

    /**
     * Get the value of budget
     */
    public function getBudget()
    {

        return $this->budget;
    }

    /**
     * Set the value of budget
     */
    public function setBudget($budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get the value of duree
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     */
    public function setDuree($duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of gain_annuelle
     */
    public function getGainAnnuelle()
    {
        return $this->gain_annuelle;
    }

    /**
     * Set the value of gain_annuelle
     */
    public function setGainAnnuelle($gain_annuelle): self
    {
        $this->gain_annuelle = $gain_annuelle;

        return $this;
    }

    /**
     * Get the value of fillable
     */
    public function getFillable()
    {
        return $this->fillable;
    }

    /**
     * Set the value of fillable
     */
    public function setFillable($fillable): self
    {
        $this->fillable = $fillable;

        return $this;
    }
}
