<?php

namespace App\Http\Controllers;

use App\Models\Transacoes;
use Illuminate\Http\Request;

class TransacoesController extends Controller
{
    public function index()
    {
        return response()->json(Transacoes::all());
    }

    public function create(Request $request)
    {
        $transacao = Transacoes::create($request->all());
        return response()->json($transacao, 201);
    }

    public function update(Request $request, $id)
    {
        $transacao = Transacoes::find($id);
        $transacao->update($request->all());
        return response()->json($transacao, 200);
    }

    public function delete($id)
    {
        $transacao = Transacoes::find($id);
        if (!$transacao) {
            return response()->json("não encontrado", 404);
        }
        $transacao->delete();
        return response()->json("apagado", 204);
    }
}
