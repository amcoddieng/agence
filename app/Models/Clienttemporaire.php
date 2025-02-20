<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clienttemporaire
 * 
 * @property int $id
 * @property int|null $personne_id
 * 
 * @property Personne|null $personne
 *
 * @package App\Models
 */
class Clienttemporaire extends Model
{
	protected $table = 'clienttemporaire';
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
}
