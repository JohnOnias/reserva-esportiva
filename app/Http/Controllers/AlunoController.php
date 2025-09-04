<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //

    public function create(){
        return view('user.cadastro');
    }

    public function store(Request $request){
        $request -> validate([
            'nome' => 'required',
            'matricula' => 'required',
            'email' => 'required',
            'senha' => 'required'
        ]);

        $aluno = new Aluno;

        $aluno->nome = $request->nome;
        $aluno->matricula = $request->matricula;
        $aluno->email = $request->email;
        $aluno->senha = $request->senha;

        $aluno->save();

        return redirect()->route('cadastro')->with('success', 'Usuário Criado com Sucesso!'); //não aparece o exemplo
    }

    
}
