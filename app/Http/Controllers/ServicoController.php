<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {
        // cuidar o GET com numero de registros na paginação
        $servicos = Servico::paginate(5);

        return view('servicos.index')->with('servicos', $servicos);
    }

    public function create()
    {
        return view('servicos.create');
    }

    public function store(Request $request)
    {
        // $dados = $request->all();
        // para prgar todos os dados exceto o token (array com o nome '_token') csrf se usa o Escept
        $dados = $request->except('_token');

        /**
         * IMPORTANT
         */
        // proteger os dados inserido em 'Models/Servico' add $fillable['todos os campos no BD'];
        Servico::create($dados);

        return redirect()->route('servicos.index');
    }

    public function edit(int $id)
    {
        $servico = Servico::findOrFail($id);

        return view('servicos.edit')->with('servico', $servico);
    }

    public function update(int $id, Request $request)
    {
        $dados = $request->except('_token', '_method');

        $servico = Servico::findOrFail($id);

        $servico->update($dados);

        return redirect()->route('servicos.index');
    }
}
