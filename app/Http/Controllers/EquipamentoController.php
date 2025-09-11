<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    
    public function telaEquipamentos(){
        return view("equipamentos.equipaments");
    }


    public function listarEquipamentos(){
        $equipamentos = Equipamento::all();

        return view('coordenacao.dashboard', compact('equipamentos'));
    }

    
}
