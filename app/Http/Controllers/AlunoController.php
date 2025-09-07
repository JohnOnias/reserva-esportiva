<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //

    public function telaCadastro(){
        return view('user.cadastro');
    }

    public function telaLogin(){
        return view('user.login');
    }

    public function cadastrar(Request $request){
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

        return redirect()->route('telaCadastro')->with('success', 'Usuário Criado com Sucesso!'); //não aparece o exemplo
    }

    public function validar(Request $request){
        $request->validate([
            'email' => 'required',
            'senha' => 'required'
        ]);

        $email = $request->email;
        $senha = $request->senha;

        echo $email;

        //vai executar a query
        $aluno = Aluno::where('email', $email)
                ->where('senha', $senha)
                ->select('id')
                ->first();

        if(!$aluno){
            return redirect()->route('login')->with('error', 'Email ou senha incorretos');
        }

    

        return redirect()->route('login')->with('success', 'Usuário logado com sucesso');

        
    }

    
}
