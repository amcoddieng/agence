<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Appartement
 *
 * @property int $id
 * @property int|null $nbChambre
 * @property int|null $nbSalon
 * @property int|null $nbSalleBain
 *
 * @property Bien $bien
 *
 * @package App\Models
 */
class Appartement extends Model
{
    protected $table = 'appartement';
    public $timestamps = false;

    protected $casts = [
        'id' => 'int',
        'nbChambre' => 'int',
        'nbSalon' => 'int',
        'nbSalleBain' => 'int',
        'bien_id' => 'int'
    ];

    protected $fillable = [
        'nbChambre',
        'nbSalon',
        'nbSalleBain',
        'bien_id'
    ];

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'bien_id');
    }
}
