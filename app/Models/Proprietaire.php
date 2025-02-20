<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proprietaire
 * 
 * @property int $id
 * @property int|null $personne_id
 * 
 * @property Personne|null $personne
 * @property Collection|Bien[] $biens
 *
 * @package App\Models
 */
class Proprietaire extends Model
{
	protected $table = 'proprietaire';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'personne_id' => 'int'
	];

	protected $fillable = [
		'personne_id'
	];

	public function personne()
	{
		return $this->belongsTo(Personne::class);
	}

	public function biens()
	{
		return $this->hasMany(Bien::class);
	}
}
