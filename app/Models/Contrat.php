<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    protected $fillable = ['bien_id', 'client_id', 'date_signature', 'montant'];

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'bien_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class, 'contrat_id');
    }
}
