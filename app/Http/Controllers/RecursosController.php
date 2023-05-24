<?php

namespace App\Http\Controllers;

use App\Models\Recursos;
use App\Models\Clubes;
use Illuminate\Http\Request;

class RecursosController extends Controller
{
     public function index(Request $r) {
          $clubes = Recursos::all();
          return $clubes;
    }
    public function insert(Request $r) {
           $rawData = $r->only(['recurso', 'saldo_disponivel']);
           $recursos = Recursos::create($rawData);
           return $recursos;
    }
     public function consumir(Request $r) {
           $rawData = $r->only(['clube_id', 'recurso_id', 'valor_consumo']);

           $clube = Clubes::find($rawData['clube_id']);
           $recurso = Clubes::find($rawData['recurso_id']);

           if($clube['saldo_disponivel'] < $rawData['valor_consumo']){
             return 'O saldo disponível do clube é insuficiente.';
           }

            if($recurso['saldo_disponivel'] < $rawData['valor_consumo']){
             return 'O saldo disponível do recurso é insuficiente.';
           }

           $valor_atual = $clube['saldo_disponivel'] - $rawData['valor_consumo'];
           $valor_atual_recurso = $recurso['saldo_disponivel'] - $rawData['valor_consumo'];

           $updateClube = Clubes::where('id', $rawData['clube_id'])->update(['saldo_disponivel' => $valor_atual]);
           $updateRecurso = Recursos::where('id', $rawData['clube_id'])->update(['saldo_disponivel' => $valor_atual_recurso]);


           return response()->json(['saldo_anterior' => $valor_atual + $rawData['valor_consumo'], 'saldo_atual'=> $valor_atual, 'clube' => $clube['clube']], 200);
    }
}
