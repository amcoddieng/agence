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
    public $timestamps = false;

    protected $casts = [
        'id' => 'int',
        'nbBureau' => 'int',
        'nbSalle' => 'int',
        'bien_id' => 'int'
    ];

    protected $fillable = [
        'nbBureau',
        'nbSalle',
        'bien_id'
    ];

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'bien_id');
    }
}

