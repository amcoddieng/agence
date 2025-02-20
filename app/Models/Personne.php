<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Personne
 * 
 * @property int $id
 * @property string|null $prenom
 * @property string|null $nom
 * @property string|null $email
 * @property string|null $nin
 * @property string|null $telephone
 * @property Carbon|null $dateNaissance
 * @property string|null $lieuNaissance
 * 
 * @property Collection|Agent[] $agents
 * @property Collection|Client[] $clients
 * @property Collection|Clienttemporaire[] $clienttemporaires
 * @property Collection|Proprietaire[] $proprietaires
 *
 * @package App\Models
 */
class Personne extends Model
{
	protected $table = 'personne';
	public $timestamps = false;

	protected $casts = [
		'dateNaissance' => 'datetime'
	];

	protected $fillable = [
		'prenom',
		'nom',
		'email',
		'nin',
		'telephone',
		'dateNaissance',
		'lieuNaissance'
	];

	public function agents()
	{
		return $this->hasMany(Agent::class);
	}

	public function clients()
	{
		return $this->hasMany(Client::class);
	}

	public function clienttemporaires()
	{
		return $this->hasMany(Clienttemporaire::class);
	}

	public function proprietaires()
	{
		return $this->hasMany(Proprietaire::class);
	}
}
