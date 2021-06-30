<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Acessorio;
use App\Models\Cor;
use App\Models\Tecido;
use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function tecido()
    {
        $tecidos = Tecido::all();
        return view('painel.tecido', compact('tecidos'));
    }

    public function cor()
    {
        $cores = Cor::all();
        return view('painel.cor', compact('cores'));
    }

    public function acessorio()
    {
        $acessorios = Acessorio::all();
        return view('painel.acessorios', compact('acessorios'));
    }

    public function tecidoStore(Request $request)
    {
        $save = Tecido::create($request->all());
        return redirect()->back();
    }
    public function corStore(Request $request)
    {
        $save = Cor::create($request->all());
        return redirect()->back();
    }
    public function acessorioStore(Request $request)
    {
        $save = Acessorio::create($request->all());
        return redirect()->back();
    }
}
