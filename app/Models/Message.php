<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 * 
 * @property int $id
 * @property string|null $contenu
 * @property int|null $client_id
 * 
 * @property Client|null $client
 *
 * @package App\Models
 */
class Message extends Model
{
	protected $table = 'message';
	public $timestamps = false;

	protected $casts = [
		'client_id' => 'int'
	];

	protected $fillable = [
		'contenu',
		'client_id'
	];

	public function client()
	{
		return $this->belongsTo(Client::class);
	}
}
