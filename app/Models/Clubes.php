<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubes extends Model
{
    public $table = 'clubes';

    protected $fillable = [
        'clube',
        'saldo_disponivel'
    ];

    use HasFactory;
}
