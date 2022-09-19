<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory;
    public function continent(){
        return $this->hasOne(Equipe::class, 'continent_id', 'id');
    }
}
