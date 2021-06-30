@extends('layouts.main')

@section('content')
    <div class="container">
        <div>
            <h2 class="text-center text-uppercase">Formulário de cadastro</h2>
        </div>
        <form action="{{ url('form/store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Revendedor</label>
                <input type="text" class="form-control" name="revendedor" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nome do Cliente</label>
                <input type="text" class="form-control" name="cliente" >
            </div>
            <div class="form-group">
                <h5 class="text-center my-3">CONDIÇÔES DE PAGAMENTO</h5>
                <div class="container">
                    <div class="row">
                        <div class="form-check col-6">
                            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios1"
                                value="Antecipado">
                            <label class="form-check-label" for="exampleRadios1">
                                Antecipado
                            </label>
                        </div>
                        <div class="form-check col-6">
                            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios1"
                                value="28 Dias">
                            <label class="form-check-label" for="exampleRadios1">
                                28 Dias
                            </label>
                        </div>
                        <div class="form-check col-6">
                            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios1"
                                value="Entrada 28 e 56 Dias">
                            <label class="form-check-label" for="exampleRadios1">
                                Entrada 28 e 56 Dias
                            </label>
                        </div>
                        <div class="form-check col-6">
                            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios1"
                                value="Depósito">
                            <label class="form-check-label" for="exampleRadios1">
                                Depósito
                            </label>
                        </div>
                        <div class="form-check col-6">
                            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios1"
                                value="Boleto">
                            <label class="form-check-label" for="exampleRadios1">
                                Boleto
                            </label>
                        </div>
                        <div class="form-check col-6">
                            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios1"
                                value="Cheque">
                            <label class="form-check-label" for="exampleRadios1">
                                Cheque
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="text-center my-3">FORMULÁRIO DE PEDIDO</h5>
            <div class="container">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Modelo</label>
                        <select class="form-control" name="modelo" id="modelo">

                            @foreach ($modelos as $modelo)
                                <option data-modelo="{{ $modelo->valor }}" value="{{ $modelo->name_modelo }}">{{ $modelo->name_modelo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Tecido</label>
                        <select class="form-control" name="tecido" id="tecido">
                            @foreach ($tecidos as $tecido)
                                <option data-tecido="{{ $tecido->valor }}" value="{{ $tecido->name_tecido }}">{{ $tecido->name_tecido }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Cor</label>
                        <select class="form-control" name="cor" id="exampleFormControlSelect1">
                            @foreach ($cores as $cor)
                                <option value="{{ $cor->name_cor }}">{{ $cor->name_cor }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Código</label>
                        <input type="text" class="form-control" name="codigo">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Quant:</label>
                        <input type="text" name="qty" class="form-control" id="quantidade">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Largu:</label>
                        <input type="text" class="form-control" name="largura"  id="largura" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Altura:</label>
                        <input type="text" class="form-control" name="altura" id="altura" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">M²:</label>
                        <input type="text" class="form-control" name="metro_q" id="metro" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">COM:</label>
                        <input type="text" class="form-control" name="com">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Vão:</label>
                        <input type="text" class="form-control" name="vao">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Fita</label>
                        <select class="form-control" name="fita" id="fita">
                            <option data-fita="0" value="0">Sem Fita</option>
                            @foreach ($fitas as $fita)
                            <option data-fita="{{ $fita->valor }}" value="{{ $fita->name_fita }}">{{ $fita->name_fita }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Cor</label>
                        <select class="form-control" name="cor_fita" id="exampleFormControlSelect1">
                            @foreach ($cores as $cor)
                            <option value="{{ $cor->name_cor }}">{{ $cor->name_cor }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Base/Rev</label>
                        <input type="text" class="form-control" name="base">
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Observações:</label>
                        <input type="text" class="form-control" name="obs">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Bando</label>
                        <select class="form-control" name="bando" id="bando">
                            <option data-bando="0" value="0">Sem Bando</option>
                            @foreach ($bandos as $bando)
                            <option data-bando="{{ $bando->valor }}" value="{{ $bando->name_bando }}">{{ $bando->name_bando }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Cor</label>
                        <select class="form-control" name="cor_bando" id="exampleFormControlSelect1">
                            @foreach ($cores as $cor)
                            <option value="{{ $cor->name_cor }}">{{ $cor->name_cor }}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Quantidade</label>
                        <input type="text" name="qty_bando" class="form-control" id="bquantidade" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Largura:</label>
                        <input type="text" class="form-control" name="largura_bando" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Total ml:</label>
                        <input type="text" class="form-control" name="metro_l" id="metro_l" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleInputEmail1">Desenho:</label>
                        <input type="text" class="form-control" name="desenho" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-check col-3">
                        <input class="form-check-input" type="radio" name="aba" id="exampleRadios1"
                            value="Aba Esquerda" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Aba Esquerda
                        </label>
                    </div>
                    <div class="form-check col-3">
                        <input class="form-check-input" type="radio" name="aba" id="exampleRadios1"
                            value="Aba Direita" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Aba Direita
                        </label>
                    </div>

                </div>
            </div>

            <div class="container">
                <h5 class="text-center text-uppercase my-4">Acessórios</h5>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Acessórios</label>
                        <select class="form-control" name="acessorios" id="acc">
                            <option data-acc="0" value="0">Sem Acessórios</option>
                            @foreach ($acessorios as $acessorio)
                            <option data-acc="{{ $acessorio->valor }}" value="{{ $acessorio->name_acc }}">{{ $acessorio->name_acc }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group col-12 col-md-2">
                        <label for="exampleInputEmail1">Quantidade</label>
                        <input type="text" class="form-control" name="qty_acc" id="aquantidade">
                    </div>
                </div>
            </div>
            <input id="total" type="hidden" name="total" value="">
    </div>
    <div class="text-center">
        <button type="button" onclick="getPriceValue()" class="btn btn-primary my-4">Calcular</button>
    </div>
    <div class="container">
        <h3 id="valor">Total:</h3>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary my-4">Enviar</button>
    </div>
    </form>

    </div>

@endsection
