<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Bien
 *
 * @property int $id
 * @property string|null $titre
 * @property string|null $description
 * @property int|null $prix
 * @property string|null $cycle
 * @property string|null $region
 * @property string|null $departement
 * @property string|null $ville
 * @property string|null $adresse
 * @property string|null $etat
 * @property int|null $disponibilite
 * @property int|null $surface
 * @property int|null $proprietaire_id
 *
 * @property Proprietaire|null $proprietaire
 * @property Appartement $appartement
 * @property Collection|Contrat[] $contrats
 * @property ImmeubleBureau $immeuble_bureau
 * @property Terrain $terrain
 * @property Villa $villa
 *
 * @package App\Models
 */
class Bien extends Model
{
	protected $table = 'bien';
	public $timestamps = false;

	protected $casts = [
		'prix' => 'int',
		'disponibilite' => 'int',
		'surface' => 'int',
		'proprietaire_id' => 'int'
	];

	protected $fillable = [
		'titre',
		'description',
		'prix',
		'cycle',
		'region',
		'departement',
		'ville',
		'adresse',
		'etat',
		'disponibilite',
		'surface',
		'proprietaire_id'
	];

	public function proprietaire()
	{
		return $this->belongsTo(Proprietaire::class);
	}

	public function appartement()
	{
        return $this->hasOne(Appartement::class, 'bien_id');	}

	public function contrats()
	{
		return $this->hasMany(Contrat::class);
	}

    public function immeuble_bureau()
    {
        return $this->hasOne(ImmeubleBureau::class, 'bien_id');
    }

    public function terrain()
    {
        return $this->hasOne(Terrain::class, 'bien_id');
    }

    public function villa()
    {
        return $this->hasOne(Villa::class, 'bien_id');
    }

}
