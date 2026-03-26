<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capacitacao;
use App\Models\Pessoa;
use App\Models\Inscricao;
use App\Models\Congregacao;
class CapacitacaoController extends Controller
{
    public function index(){
        $ins = Inscricao::all();
        $pes = Pessoa::all();
        $cap = Capacitacao::all();
        return view('dashboard', compact('cap', 'pes', 'ins'));
    }
    public function congregacao(){
        $cap = Congregacao::with('pessoa')->with('setor')->get();
        return view('congregacao', compact('cap'));
    }
    public function pessoas(){
        $cap = Pessoa::with('congregacao')->get();
        return view('pessoas', compact('cap'));
    }
}
