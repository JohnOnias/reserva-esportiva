<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Emprestimo;
use Illuminate\Http\Request;

class EmprestimoController extends Controller
{

    public function telaEmprestimo(){
        return view('coordenacao.dashboard');
    }

    public function telaHistorico(){
        return view('coordenacao.historico');
    }


    public function fazerEmprestimo(Request $request){

        $request->validate([
            "matricula" => "required",
            "selecao_equipamento" => "required",
            "data_inicial" => "required",
            "data_final" => "required"
            
        ]);

        $matricula = $request->matricula;
        $equipamentoId = $request->selecao_equipamento;
        $dataAquisicao = $request->data_inicial;
        $dataDevolucao = $request->data_final;


        $aluno = new AlunoController();

        $idAluno = $aluno->buscarAlunoPorMatricula($matricula);

        if($idAluno != null){
            $emprestimo = new Emprestimo;
            $emprestimo->user_id = $idAluno;
            $emprestimo->equipamento_id = $equipamentoId;
            $emprestimo->tempo_aquisicao = $dataAquisicao;
            $emprestimo->tempo_devolucao = $dataDevolucao;

            $emprestimo->save();

            return redirect()->route('dashboard')->with('success', 'Equipamento reservado com sucesso');
        }



        return redirect()->route('dashboard')->with('error', 'Aluno não encontrado');

    }
}
