<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public function role(){
        return $this->hasOne(Joueur::class, 'role_id', 'id');
    }
}
