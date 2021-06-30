
@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        <form action="{{ url('bando/store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Bando</label>
              <input type="text" class="form-control" name="name_bando">
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
                @foreach ($bandos as $bando)
                <tr>
                    <th scope="row">{{ $bando->id }}</th>
                    <td>{{ $bando->name_bando }}</td>
                    <td>{{ $bando->valor }}</td>

                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
