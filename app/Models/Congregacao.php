<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Congregacao extends Model
{
    public function pessoa(){
        return $this->hasMany(Pessoa::class, 'congregacao_id', 'id');
    }
    public function setor(){
        return $this->belongsTo(Setor::class, 'setor_id');
    }
}
