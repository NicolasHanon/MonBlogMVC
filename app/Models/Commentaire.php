<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'COM_DATE',
        'COM_AUTEUR',
        'COM_CONTENU',
        'billet_id',
        'created_at',
        'updated_at',
    ];

    public function billet()
    {
        return $this->belongsTo(Billet::class);
    }
}
