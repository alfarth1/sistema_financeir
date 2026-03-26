<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{

    public function congregacao(){
        return $this->belongsTo(Congregacao::class, 'congregacao_id');
    }
    public function inscricao(){
        return $this->hasMany(Inscricao::class, 'pessoa_id', 'id');
    }

}
