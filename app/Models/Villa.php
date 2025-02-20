<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Villa
 * 
 * @property int $id
 * @property int|null $nbChambre
 * @property int|null $nbSalon
 * @property int|null $nbSalleBain
 * @property int|null $nbGarage
 * 
 * @property Bien $bien
 *
 * @package App\Models
 */
class Villa extends Model
{
	protected $table = 'villa';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'nbChambre' => 'int',
		'nbSalon' => 'int',
		'nbSalleBain' => 'int',
		'nbGarage' => 'int'
	];

	protected $fillable = [
		'nbChambre',
		'nbSalon',
		'nbSalleBain',
		'nbGarage'
	];

	public function bien()
	{
		return $this->belongsTo(Bien::class, 'id');
	}
}
