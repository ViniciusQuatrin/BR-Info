<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario as Funcionario;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('funcionarios.index', [
            'funcionarios' => Funcionario::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'num_cracha' => 'required',
            'nome' => 'required',
            'cargo' => ['required', new EnumRule(Cargo::class)],
            'salario' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        Funcionario::create($request->all());

        return redirect()->route('funcionarios.create')->with('success', 'Funcionário criado com sucesso!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
