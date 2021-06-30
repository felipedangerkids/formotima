@extends('layouts.app')

@section('content')
    <div class="container">
        <h4 class="text-center">Cliente</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Revendedor: </strong> {{ $pedido->revendedor }}</li>
            <li class="list-group-item"><strong>Cliente: </strong> {{ $pedido->cliente }}</li>
            <li class="list-group-item"><strong>Pagamento: </strong> {{ $pedido->pagamento }}</li>
        </ul>

        <h4 class="text-center">Pedido</h4>
        <ul class="list-group list-group-flush mt-2">
            <li class="list-group-item"><strong>Modelo: </strong> {{ $pedido->modelo }}</li>
            <li class="list-group-item"><strong>Tecido: </strong> {{ $pedido->tecido }}</li>
            <li class="list-group-item"><strong>Cor: </strong> {{ $pedido->cor }}</li>
            <li class="list-group-item"><strong>Código: </strong> {{ $pedido->codigo }}</li>
            <li class="list-group-item"><strong>Quantidade: </strong> {{ $pedido->qty }}</li>
            <li class="list-group-item"><strong>Largura: </strong> {{ $pedido->largura }}</li>
            <li class="list-group-item"><strong>Altura: </strong> {{ $pedido->altura }}</li>
            <li class="list-group-item"><strong>Metro²: </strong> {{ $pedido->metro_q }}</li>
            <li class="list-group-item"><strong>COM: </strong> {{ $pedido->com }}</li>
            <li class="list-group-item"><strong>Vão: </strong> {{ $pedido->vao }}</li>
            <li class="list-group-item"><strong>Fita: </strong> {{ $pedido->fita }}</li>
            <li class="list-group-item"><strong>Cor Fita: </strong> {{ $pedido->cor_fita }}</li>
            <li class="list-group-item"><strong>Base: </strong> {{ $pedido->base }}</li>
            <li class="list-group-item"><strong>Observação: </strong> {{ $pedido->obs }}</li>
            <li class="list-group-item"><strong>Bando: </strong> {{ $pedido->bando }}</li>
            <li class="list-group-item"><strong>Cor Bando: </strong> {{ $pedido->cor_bando }}</li>
            <li class="list-group-item"><strong>Quantidade Bando: </strong> {{ $pedido->qty_bando }}</li>
            <li class="list-group-item"><strong>Largura Bando: </strong> {{ $pedido->largura_bando }}</li>
            <li class="list-group-item"><strong>Metro Linear: </strong> {{ $pedido->metro_l }}</li>
            <li class="list-group-item"><strong>Desenho: </strong> {{ $pedido->desenho }}</li>
            <li class="list-group-item"><strong>Lado da Aba: </strong> {{ $pedido->aba }}</li>
            <li class="list-group-item"><strong>Acessório: </strong> {{ $pedido->acessorios }}</li>
            <li class="list-group-item"><strong>Quantidade de Acessórios: </strong> {{ $pedido->qty_acc }}</li>
        </ul>

        <h3 class="text-center">Total: {{  'R$ '.number_format($pedido->total, 2, ',', '.') }}</h3>
    </div>
@endsection
