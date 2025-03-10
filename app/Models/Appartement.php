<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    use HasFactory;

    protected $fillable = ['bien_id'];

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'bien_id');
    }
}
