<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Terrain
 * 
 * @property int $id
 * 
 * @property Bien $bien
 *
 * @package App\Models
 */
class Terrain extends Model
{
	protected $table = 'terrain';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	public function bien()
	{
		return $this->belongsTo(Bien::class, 'id');
	}
}
