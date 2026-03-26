<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    public function congregacao(){
        return $this->hasMany(Congregacao::class, 'setor_id', 'id');
    }

}
