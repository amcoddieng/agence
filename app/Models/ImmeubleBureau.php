<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImmeubleBureau
 * 
 * @property int $id
 * @property int|null $nbBureau
 * @property int|null $nbSalle
 * 
 * @property Bien $bien
 *
 * @package App\Models
 */
class ImmeubleBureau extends Model
{
	protected $table = 'immeuble_bureau';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'nbBureau' => 'int',
		'nbSalle' => 'int'
	];

	protected $fillable = [
		'nbBureau',
		'nbSalle'
	];

	public function bien()
	{
		return $this->belongsTo(Bien::class, 'id');
	}
}
