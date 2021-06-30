
@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        <form action="{{ url('fita/store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Fita</label>
              <input type="text" class="form-control" name="name_fita">
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
                @foreach ($fitas as $fita)
                <tr>
                    <th scope="row">{{ $fita->id }}</th>
                    <td>{{ $fita->name_fita }}</td>
                    <td>{{ $fita->valor }}</td>

                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
