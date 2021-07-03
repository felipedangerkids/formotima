<?php

namespace App\Http\Controllers;


use App\Models\Cor;
use App\Models\Fita;
use App\Models\Bando;
use App\Models\Modelo;
use App\Models\Pedido;
use App\Models\Tecido;
use App\Models\Acessorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use PDF;


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
    public function modelo()
    {
        $modelos = Modelo::all();
        return view('painel.modelos', compact('modelos'));
    }
    public function fita()
    {
        $fitas = Fita::all();
        return view('painel.fitas', compact('fitas'));
    }
    public function bando()
    {
        $bandos = Bando::all();
        return view('painel.bando', compact('bandos'));
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
    public function modeloStore(Request $request)
    {
        $save = Modelo::create($request->all());
        return redirect()->back();
    }
    public function fitaStore(Request $request)
    {
        $save = Fita::create($request->all());
        return redirect()->back();
    }
    public function bandoStore(Request $request)
    {
        $save = Bando::create($request->all());
        return redirect()->back();
    }

    public function form()
    {
        $modelos = Modelo::all();
        $tecidos = Tecido::all();
        $cores = Cor::all();
        $bandos = Bando::all();
        $fitas = Fita::all();
        $acessorios = Acessorio::all();
        return view('pages.index', compact('tecidos', 'cores', 'acessorios', 'modelos', 'bandos', 'fitas'));
    }

    public function formStore(Request $request)
    {
        $save = Pedido::create($request->all());
        return redirect()->back();
    }

    public function pedidos()
    {
        $pedidos = Pedido::all();
        return view('painel.pedidos', compact('pedidos'));
    }
    public function pedido($id)
    {
        $pedido = Pedido::find($id);
        return view('painel.pedido', compact('pedido'));
    }

    public function createPDF($id)
    {
        $pedido = Pedido::find($id);
        $pdf = PDF::loadView('painel.pdf_view', compact('pedido'));
        return $pdf->download('pedido.pdf');
    }
}
