<?php

namespace App\Models;

use App\Models\Continent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipe extends Model
{
    use HasFactory;
    public function continent(){
        return $this->belongsTo(Continent::class);
    }

    public function equipe(){
        return $this->hasOne(Joueur::class, 'equipe_id', 'id');
    }
}
