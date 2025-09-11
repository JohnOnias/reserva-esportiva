<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmprestimoController extends Controller
{

    public function telaEmprestimo(){
        return view('emprestimo.reservations');
    }


    public function fazerEmprestimo(Request $request){

        $request->validate([
            "matricula" => "required",
            "selecao_equipamento" => "required",
            "data_inicial" => "required",
            "data_final" => "required"
            
        ]);

        $matricula = $request->matricula;
        $equipamento = $request->selecao_equipamento;
        $data_inicial = $request->data_inicial;
        $data_final = $request->data_final;

        echo $matricula."<br>";
        echo $equipamento."<br>";

        return view("coordenacao.dashboard");

    }
}
