<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['contenu','vu', 'expediteur_id', 'destinataire_id'];

    public function expediteur()
    {
        return $this->belongsTo(Personne::class, 'expediteur_id');
    }

    public function destinataire()
    {
        return $this->belongsTo(Personne::class, 'destinataire_id');
    }
}
