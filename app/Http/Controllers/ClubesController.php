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
}
