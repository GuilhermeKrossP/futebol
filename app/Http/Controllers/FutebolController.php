<?php

namespace App\Http\Controllers;

use App\Models\Futebol;
use App\Models\Treinador;
use Illuminate\Http\Request;

class FutebolController extends Controller
{
    public function index()
{
    $times = Futebol::all();
    return view('time.index', compact('times')); //compact serve para mandar o conteudo para a VIEW
}

public function create()
{
    $treinadors = Treinador::all();
    return view('time.create', compact('treinadors')); // fazer essas alterações no momento que estiver fazendo o relacionamento entre entidades
}

public function store(Request $request)
{
    Futebol::create($request->all());
    return redirect('/')->with('success', 'Time criado com sucesso!.'); // No primeiro parenteses é o inicio da rota/servidor.
}

public function edit($id)
{
    $times = Futebol::findOrFail($id);
    return view('time.edit', compact('times'));  //compact serve para mandar o conteudo para a VIEW
} 

public function update(Request $request, $id)
{
    $times = Futebol::findOrFail($id);
    $times->update($request->all());
    return redirect('/')->with('success', 'Parabéns pela evolução do seu clube.');
}

public function destroy($id)
{
    $times = Futebol::findOrFail($id);
    $times->delete();
    return redirect('/')->with('success', 'Seu time foi rebaixado.');
}
}
