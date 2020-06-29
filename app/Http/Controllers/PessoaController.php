<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoaController extends Controller
{
    
    public function index(){
        $pessoas = Pessoa::all();
        return view('list-pessoas', compact('pessoas', 'cpf'));
    }

    public function create(){

        return view('include-pessoa');
    }

    public function store(Request $request) {
        $pessoa = new Pessoa;
        $pessoa->nome = $request->nome;
        $pessoa->cpf = $request->cpf;
        $pessoa->rg = $request->rg;
        $pessoa->data_nasc = $request->data_nasc;
        $pessoa->local_nasc = $request->local_nasc;
        $pessoa->telefone = $request->telefone;

        $data_aniver = $pessoa->data_nasc;
        $idade = \Carbon\Carbon::parse($data_aniver)->age;

        if($pessoa->local_nasc == 'BA' and $idade < 18){

            $request->session()->flash('alert-danger', 'Para o estado da BA o Cliente precisa ser maior de 18 anos');
            return redirect()->back();

        }

        if($pessoa->local_nasc == 'SP' and empty($pessoa->rg)){

            $request->session()->flash('alert-danger', 'Necessário preencher o RG');
            return redirect()->back();

        }

        $pessoa->save();
        $request->session()->flash('alert-success', 'Cadastro realizado com sucesso!');
        return redirect()->route('pessoa.index')->with('message', 'Cadastro realizado com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $pessoa = Pessoa::findOrFail($id);
        var_dump($pessoa);
        return view('alter-pessoa', compact('pessoa'));
    }

    public function update(Request $request, $id) {
        $pessoa = Pessoa::findOrFail($id); 
        $pessoa->nome = $request->nome;
        $pessoa->cpf = $request->cpf;
        $pessoa->rg = $request->rg;
        $pessoa->data_nasc = $request->data_nasc;
        $pessoa->local_nasc = $request->local_nasc;
        $pessoa->telefone = $request->telefone;

        $data_aniver = $pessoa->data_nasc;
        $idade = \Carbon\Carbon::parse($data_aniver)->age;

        if($pessoa->local_nasc == 'BA' and $idade < 18){

            $request->session()->flash('alert-danger', 'Para o estado da BA o Cliente precisa ser maior de 18 anos');
            return redirect()->back();

        }

        if($pessoa->local_nasc == 'SP' and empty($pessoa->rg)){

            $request->session()->flash('alert-danger', 'Necessário preencher o RG');
            return redirect()->back();

        }
        
        $pessoa->save();
        return redirect()->route('pessoa.index')->with('message', 'Cadastro alterado com sucesso!');
    }

    public function destroy($id) {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();
        return redirect()->route('pessoa.index')->with('message', 'Cadastro excluído com sucesso!');
    }


}
