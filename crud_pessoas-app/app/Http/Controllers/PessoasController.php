<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoas;

class PessoasController extends Controller
{

    public function inicio(){

        return view ('pessoas.inicio');

    }
    
    public function index(){

        $pessoas = Pessoas::all();
        return view ('pessoas.index', ['pessoas' => $pessoas]);

    }

    public function criar(){
        return view ('pessoas.criar');
    }

    public function criarpost(Request $request){
        $data = $request-> validate([
            'id' => 'required',
            'nome' => 'required',
            'cpf' => 'required|numeric',
            'patente' => 'required',
            'admissao' => 'required|numeric'
        ]);
        $novaPessoa = Pessoas::create($data);
        
        return redirect(route('pessoas.index'));
    }

    public function editar(Pessoas $pessoas ){
        return view('pessoas.editar', ['pessoas' => $pessoas]);
    }

    public function atualizar(Pessoas $pessoas, Request $request){
        $data = $request-> validate([
            'id' => 'required',
            'nome' => 'required',
            'cpf' => 'required|numeric',
            'patente' => 'required',
            'admissao' => 'required|numeric'
        ]);

        $pessoas -> update($data);
       
        return redirect(route('pessoas.index')) -> with('success', 'Pessoa atualizada');
        
    }

    public function excluir(Pessoas $pessoas){
        $pessoas -> delete();
        return redirect(route('pessoas.index')) -> with('success', 'Pessoa excluida');
    }

    
}
