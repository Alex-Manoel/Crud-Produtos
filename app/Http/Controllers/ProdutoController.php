<?php

namespace App\Http\Controllers;

 use App\Models\Produto;
 use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function mostrarTodosProdutos()
{ $tarefas = Produto::all();

if($tarefas->isEmpty()){
    return response()->json(['message' => 'não encontrado'], 404);
}
else{
    return response()->json($tarefas, 200);
}
}

public function deletar($id)
{
    $tarefa = Produto::findOrFail($id);
    $tarefa->delete();
    return response()->json(['message' => 'Tarefa executada'], 200);
}

public function atualiza(Request $request, $id)
{
    $tarefa = Produto::findOrFail($id);
    $tarefa->update($request->all());

    return response()->json(['message' => 'Tarefa atualizada com sucesso'], 200);
}

public function criar(Request $request)
{
    $data = $request->only(['nome', 'valor', 'descricao',]);
    $novaTarefa = Produto::create($data);
    return response()->json(['message' => 'Registro criado com sucesso', 'data' => $novaTarefa], 201);
}

}
