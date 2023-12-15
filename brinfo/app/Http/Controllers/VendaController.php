<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Venda as Venda;
use App\Models\Funcionario;
use App\Models\Produto as Produto;
use App\Models\Servico as Servico;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Venda::factory(10)->create();s

        $vendas = Venda::all();
        dd($vendas);
        return view('venda.index', compact('vendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produtos = Produto::all();
        $servicos = Servico::all();
        return view('venda.create', compact('produtos', 'servicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'funcionario_id' => 'required',
            'cliente_id' => 'required',
            'data' => 'required',
            'total' => 'required',
            'forma_pagamento' => 'required',
        ]);

        Venda::create($request->all());

        return redirect()->route('venda.index')->with('success', 'Venda criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $venda = Venda::find($id);
        $funcionarios = Funcionario::all();
        $produtos = Produto::all();
        $servicos = Servico::all();
        return view('venda.edit', compact('venda', 'funcionarios', 'produtos', 'servicos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'funcionario_id' => 'required',
            'cliente_id' => 'required',
            'data' => 'required',
            'total' => 'required',
            'forma_pagamento' => 'required',
        ]);

        $venda = Venda::find($id);

        $venda->update($request->all());

        return redirect()->route('venda.index')->with('success', 'Venda atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $venda = Venda::find($id);
        $venda->delete();
    }
}
