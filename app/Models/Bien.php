<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'description', 'prix', 'proprietaire_id', 'cycle', 'region', 'departement', 'ville', 'adresse', 'etat', 'disponibilite', 'surface'];

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class, 'proprietaire_id');
    }

    public function appartements()
    {
        return $this->hasMany(Appartement::class, 'bien_id');
    }

    public function immeublesBureaux()
    {
        return $this->hasMany(ImmeubleBureau::class, 'bien_id');
    }

    public function terrains()
    {
        return $this->hasMany(Terrain::class, 'bien_id');
    }

    public function villas()
    {
        return $this->hasMany(Villa::class, 'bien_id');
    }

    public function magasins()
    {
        return $this->hasMany(Magasin::class, 'bien_id');
    }
}
