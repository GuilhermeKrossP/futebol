<?php

namespace App\Http\Controllers;

use App\Models\Treinador;
use Illuminate\Http\Request;

class TreinadorController extends Controller
{
        public function index()
    {
        $treinadors = Treinador::all();
        return view('treinador.index', compact('treinadors')); //compact serve para mandar o conteudo para a VIEW
    }
    
    public function create()
    {
        return view('treinador.create');
    }
    
    public function store(Request $request)
    {
        Treinador::create($request->all());
        return redirect('treinador')->with('success', 'Seja bem vindo ao seu novo clube!.'); // No primeiro parenteses é o inicio da rota/servidor.
    }
    
    public function edit($id)
    {
        $treinadors = Treinador::findOrFail($id);
        return view('treinador.edit', compact('treinadors'));  //compact serve para mandar o conteudo para a VIEW
    } 
    
    public function update(Request $request, $id)
    {
        $treinadors = Treinador::findOrFail($id);
        $treinadors->update($request->all());
        return redirect('treinador')->with('success', 'Parabéns pela treinamento.');
    }
    
    public function destroy($id)
    {
        $treinadors = Treinador::findOrFail($id);
        $treinadors->delete();
        return redirect('treinador')->with('success', 'Você está demitido!.');
    }

}
