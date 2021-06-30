@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        <form action="{{ url('cor/store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Cor</label>
              <input type="text" class="form-control" name="name_cor">
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
              </tr>
            </thead>
            <tbody>
                @foreach ($cores as $cor)
                <tr>
                    <th scope="row">{{ $cor->id }}</th>
                    <td>{{ $cor->name_cor }}</td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
