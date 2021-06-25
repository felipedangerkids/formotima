@extends('layouts.main')

@section('content')
    <div class="container">
        <div>
            <h2 class="text-center text-uppercase">Formulário de cadastro</h2>
        </div>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Revendedor</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nome do Cliente</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <h5 class="text-center my-3">CONDIÇÔES DE PAGAMENTO</h5>
                <div class="container">
                    <div class="row">
                        <div class="form-check col-6">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Antecipado
                            </label>
                        </div>
                        <div class="form-check col-6">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                28 Dias
                            </label>
                        </div>
                        <div class="form-check col-6">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Entrada 28 e 56 Dias
                            </label>
                        </div>
                        <div class="form-check col-6">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Depósito
                            </label>
                        </div>
                        <div class="form-check col-6">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Boleto
                            </label>
                        </div>
                        <div class="form-check col-6">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
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
                        <label for="exampleFormControlSelect1">Coleção e Cor</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Branco</option>
                            <option>Preto</option>
                            <option>Rosa</option>
                            <option>Azul</option>
                            <option>Verde</option>
                        </select>
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Código</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Quant:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Largu:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Altura:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">M²:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">COM:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Modelo:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Vão:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Coleção e Cor</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Branco</option>
                            <option>Preto</option>
                            <option>Rosa</option>
                            <option>Azul</option>
                            <option>Verde</option>
                        </select>
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Código</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Quant:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Largu:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Altura:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">M²:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">COM:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Modelo:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Vão:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Fita e Cor</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Branco</option>
                            <option>Preto</option>
                            <option>Rosa</option>
                            <option>Azul</option>
                            <option>Verde</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Base/Rev</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Observações:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Valor m²:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Acessorios:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Total:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Bando</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Branco</option>
                            <option>Preto</option>
                            <option>Rosa</option>
                            <option>Azul</option>
                            <option>Verde</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Coleção e Cor</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Branco</option>
                            <option>Preto</option>
                            <option>Rosa</option>
                            <option>Azul</option>
                            <option>Verde</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Quantidade</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Largura:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Total ml:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleInputEmail1">Desenho:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-check col-3">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                            value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Aba Esquerda
                        </label>
                    </div>
                    <div class="form-check col-3">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                            value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Aba Direita
                        </label>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Bando</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Branco</option>
                            <option>Preto</option>
                            <option>Rosa</option>
                            <option>Azul</option>
                            <option>Verde</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Coleção e Cor</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Branco</option>
                            <option>Preto</option>
                            <option>Rosa</option>
                            <option>Azul</option>
                            <option>Verde</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Quantidade</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Largura:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputEmail1">Total ml:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleInputEmail1">Desenho:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-check col-3">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                            value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Aba Esquerda
                        </label>
                    </div>
                    <div class="form-check col-3">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                            value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Aba Direita
                        </label>
                    </div>

                </div>
            </div>
            <div class="container">
                <h5 class="text-center text-uppercase my-4">Acessórios </h5>
                <div class="row">
                    <div class="form-group col-6 col-md-2">
                        <label for="exampleInputEmail1">Quantidade</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-6 col-md-4">
                        <label for="exampleInputEmail1">Acessórios em Geral</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-6 col-md-2">
                        <label for="exampleInputEmail1">Valor</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-6 col-md-2">
                        <label for="exampleInputEmail1">Total</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>


                </div>
            </div>

    </div>
    <div class="text-center">
        <button type="button" class="btn btn-primary my-4">Enviar</button>
    </div>
    </form>

    </div>
@endsection
