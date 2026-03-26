<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    public function capacitacao(){
        return $this->belongsTo(Capacitacao::class, 'capacitacao_id');
    }
    public function pessoa(){
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }
}
