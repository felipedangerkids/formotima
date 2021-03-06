@extends('layouts.app')

@section('content')
    <div class="container">
        <div>

        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Cliente</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <th>{{ $pedido->cliente }}</th>
                        <td>{{ $pedido->modelo }}</td>
                        <td>{{ 'R$ ' . number_format($pedido->total, 2, ',', '.') }} </td>
                        <td>
                            <div class="d-flex">
                                <div>
                                    <a href="{{ url('pedido/' . $pedido->id) }}"> <button
                                            class="btn btn-primary">Ver</button></a>
                                </div>
                                <div class="mx-2">
                                    <a href="{{ url('salvar/pdf/' . $pedido->id) }}"> <button
                                            class="btn btn-dark">EXPORTAR PDF</button></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
