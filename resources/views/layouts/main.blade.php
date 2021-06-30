<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('assets/css/main.min.css') }}">
    <title>OPTIMA PERSIANAS</title>
</head>
<body>
    <div id="main">
        <div class="logo">
            <img src="{{ url('assets/img/logo-2.png') }}" alt="">
        </div>
        @yield('content')
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
     function getPriceValue(){
    var modelo = $("#modelo").find(":selected").data("modelo");
    var tecido = $("#tecido").find(":selected").data("tecido");
    var fita = $("#fita").find(":selected").data("fita");
    var bando = $("#bando").find(":selected").data("bando");
    var acc = $("#acc").find(":selected").data("acc");
    var altura = $('#altura').val();
    var largura = $('#largura').val();
    var metro = $('#metro').val();
    var metro_l = $('#metro_l').val();
    var quantidade = $('#quantidade').val();
    var bquantidade = $('#bquantidade').val();
    var aquantidade = $('#aquantidade').val();

    //modelo
    var tecmodel = tecido + modelo * metro;
    var resultado1 = tecmodel * quantidade;

    //bando
    var bandoq = bando * metro_l;
    var bqv = bandoq * bquantidade;

    //acessorio
    var accquantidade = acc * aquantidade;

    var total = resultado1 + bqv + accquantidade + fita;
    var input = $("#total").val(total);
    var tohtm = $("#valor").html("Total:"+" "+total.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'}));


     }

</script>
</body>
</html>
