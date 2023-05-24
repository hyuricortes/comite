<?php

namespace App\Http\Controllers;

use App\Models\Recursos;
use Illuminate\Http\Request;

class RecursosController extends Controller
{
     public function index(Request $r) {
          $clubes = Recursos::all();
          return $clubes;
    }
}
