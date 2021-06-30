
@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        <form action="{{ url('acessorio/store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Acessório</label>
              <input type="text" class="form-control" name="name_acc">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Valor</label>
              <input type="number" class="form-control" name="valor">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
    </div>
    <div class="mt-3">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Valor</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($acessorios as $acessorio)
                <tr>
                    <th scope="row">{{ $acessorio->id }}</th>
                    <td>{{ $acessorio->name_acc }}</td>
                    <td>{{ $acessorio->valor }}</td>

                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
