<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;

    protected $fillable = ['personnes_id'];

    public function personne()
    {
        return $this->belongsTo(Personne::class, 'personnes_id');
    }

    public function biens()
    {
        return $this->hasMany(Bien::class, 'proprietaire_id');
    }
}
