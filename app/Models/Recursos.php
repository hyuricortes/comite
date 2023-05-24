<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recursos extends Model
{
    public $table = 'recursos';

    protected $fillable = [
        'recurso',
        'saldo_disponivel'
    ];

    use HasFactory;
}
