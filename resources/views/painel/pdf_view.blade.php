<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PEDIDO</title>
</head>
<body>
    <h4>Cliente</h4>
    <ul >
        <li ><strong>Revendedor: </strong> {{ $pedido->revendedor }}</li>
        <li ><strong>Cliente: </strong> {{ $pedido->cliente }}</li>
        <li ><strong>Pagamento: </strong> {{ $pedido->pagamento }}</li>
    </ul>

    <h4 >Pedido</h4>
    <ul >
        <li ><strong>Modelo: </strong> {{ $pedido->modelo }}</li>
        <li ><strong>Tecido: </strong> {{ $pedido->tecido }}</li>
        <li ><strong>Cor: </strong> {{ $pedido->cor }}</li>
        <li ><strong>Código: </strong> {{ $pedido->codigo }}</li>
        <li ><strong>Quantidade: </strong> {{ $pedido->qty }}</li>
        <li ><strong>Largura: </strong> {{ $pedido->largura }}</li>
        <li ><strong>Altura: </strong> {{ $pedido->altura }}</li>
        <li ><strong>Metro²: </strong> {{ $pedido->metro_q }}</li>
        <li ><strong>COM: </strong> {{ $pedido->com }}</li>
        <li ><strong>Vão: </strong> {{ $pedido->vao }}</li>
        <li ><strong>Fita: </strong> {{ $pedido->fita }}</li>
        <li ><strong>Cor Fita: </strong> {{ $pedido->cor_fita }}</li>
        <li ><strong>Base: </strong> {{ $pedido->base }}</li>
        <li ><strong>Observação: </strong> {{ $pedido->obs }}</li>
        <li ><strong>Bando: </strong> {{ $pedido->bando }}</li>
        <li ><strong>Cor Bando: </strong> {{ $pedido->cor_bando }}</li>
        <li ><strong>Quantidade Bando: </strong> {{ $pedido->qty_bando }}</li>
        <li ><strong>Largura Bando: </strong> {{ $pedido->largura_bando }}</li>
        <li ><strong>Metro Linear: </strong> {{ $pedido->metro_l }}</li>
        <li ><strong>Desenho: </strong> {{ $pedido->desenho }}</li>
        <li ><strong>Lado da Aba: </strong> {{ $pedido->aba }}</li>
        <li ><strong>Acessório: </strong> {{ $pedido->acessorios }}</li>
        <li ><strong>Quantidade de Acessórios: </strong> {{ $pedido->qty_acc }}</li>
        <h3>Total: {{  'R$ '.number_format($pedido->total, 2, ',', '.') }}</h3>
</body>
</html>
