<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $id
 * @property int|null $personne_id
 * 
 * @property Personne|null $personne
 * @property Collection|Contrat[] $contrats
 * @property Collection|Message[] $messages
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'client';
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

	public function contrats()
	{
		return $this->hasMany(Contrat::class);
	}

	public function messages()
	{
		return $this->hasMany(Message::class);
	}
}
