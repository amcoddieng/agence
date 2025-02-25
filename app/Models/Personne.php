<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'email', 'nin', 'telephone'];

    public function proprietaire()
    {
        return $this->hasOne(Proprietaire::class, 'personnes_id');
    }

    public function agent()
    {
        return $this->hasOne(Agent::class, 'personnes_id');
    }

    public function client()
    {
        return $this->hasOne(Client::class, 'personnes_id');
    }
}
