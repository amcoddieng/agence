<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contrat
 * 
 * @property int $id
 * @property string|null $etat
 * @property Carbon|null $dateDebut
 * @property Carbon|null $dateFin
 * @property int|null $client_id
 * @property int|null $bien_id
 * 
 * @property Client|null $client
 * @property Bien|null $bien
 *
 * @package App\Models
 */
class Contrat extends Model
{
	protected $table = 'contrat';
	public $timestamps = false;

	protected $casts = [
		'dateDebut' => 'datetime',
		'dateFin' => 'datetime',
		'client_id' => 'int',
		'bien_id' => 'int'
	];

	protected $fillable = [
		'etat',
		'dateDebut',
		'dateFin',
		'client_id',
		'bien_id'
	];

	public function client()
	{
		return $this->belongsTo(Client::class);
	}

	public function bien()
	{
		return $this->belongsTo(Bien::class);
	}
}
