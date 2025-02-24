<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Terrain
 *
 * @property int $id
 * @property int $bien_id
 *
 * @property Bien $bien
 *
 * @package App\Models
 */
class Terrain extends Model
{
    protected $table = 'terrain';
    public $timestamps = false;

    protected $casts = [
        'id' => 'int',
        'bien_id' => 'int'
    ];

    protected $fillable = [
        'bien_id'
    ];

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'bien_id');
    }
}
