<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = ['personnes_id', 'login', 'password'];

    public function personne()
    {
        return $this->belongsTo(Personne::class, 'personnes_id');
    }
}
