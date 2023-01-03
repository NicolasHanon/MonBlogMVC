<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billet extends Model
{
    use HasFactory;
    protected $fillable = [
        'BIL_DATE',
        'BIL_TITRE',
        'BIL_CONTENU',
    ];
    //On ne prendra pas le champ timestamp associé à la table.
    public $timestumps = false;

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
