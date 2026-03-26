<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitacao extends Model
{
    protected $fillable = [
        'nome',
        'data',
        'tema',
        'preco',
        'cor',
    ];

    public function inscricao(){
        return $this->hasMany(Inscricao::class, 'capacitacao_id', 'id');
    }
    


}
