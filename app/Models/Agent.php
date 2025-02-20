<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agent
 * 
 * @property int $id
 * @property string|null $login
 * @property string|null $password
 * @property int|null $personne_id
 * 
 * @property Personne|null $personne
 *
 * @package App\Models
 */
class Agent extends Model
{
	protected $table = 'agent';
	public $timestamps = false;

	protected $casts = [
		'personne_id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'login',
		'password',
		'personne_id'
	];

	public function personne()
	{
		return $this->belongsTo(Personne::class);
	}
}
