<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = ['contrat_id', 'montant'];

    public function contrat()
    {
        return $this->belongsTo(Contrat::class, 'contrat_id');
    }
}
