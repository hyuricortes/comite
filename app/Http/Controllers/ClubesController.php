<?php

namespace App\Http\Controllers;

use App\Models\Clubes;
use Illuminate\Http\Request;

class ClubesController extends Controller
{
    public function index(Request $r) {
          $clubes = Clubes::all();
          return $clubes;
    }
    public function insert(Request $r) {
           $rawData = $r->only(['clube', 'saldo_disponivel']);
           $clubes = Clubes::create($rawData);
           return $clubes;
    }
}
