<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'revendedor',
        'cliente',
        'pagamento',
        'modelo',
        'tecido',
        'cor',
        'codigo',
        'qty',
        'largura',
        'altura',
        'metro_q',
        'com',
        'vao',
        'fita',
        'cor_fita',
        'base',
        'obs',
        'bando',
        'cor_bando',
        'qty_bando',
        'largura_bando',
        'metro_l',
        'desenho',
        'aba',
        'acessorios',
        'qty_acc',
        'total'
    ];
}

