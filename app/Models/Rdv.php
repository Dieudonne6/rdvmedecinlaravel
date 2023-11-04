<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Docteur;


class Rdv extends Model
{
    use HasFactory;

    public function docteur()
    {
        return $this->belongsTo(Docteur::class, 'docteur_id');
    }
}
