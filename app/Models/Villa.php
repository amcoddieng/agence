<?php

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
 * @property int $bien_id
 *
 * @property Bien $bien
 *
 * @package App\Models
 */
class Villa extends Model
{
    protected $table = 'villa';
    public $timestamps = false;

    protected $casts = [
        'id' => 'int',
        'nbChambre' => 'int',
        'nbSalon' => 'int',
        'nbSalleBain' => 'int',
        'nbGarage' => 'int',
        'bien_id' => 'int'
    ];

    protected $fillable = [
        'nbChambre',
        'nbSalon',
        'nbSalleBain',
        'nbGarage',
        'bien_id'
    ];

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'bien_id');
    }
}
