@extends('layouts.main')

@section('content')

<h2>Produtos em Stock</h2>

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome do Prod.</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
              <th scope="row">{{$product->id}}</th>
              <td>{{ $product->name}}</td>
              <td>{{ $product->category}}</td>
              <td>
                <a href="/products/del/{{$product->id}}">Deletar</a>
                <a href="/products/edit/{{$product->id}}">Editar</a>
              </td>
            </tr>                
            @endforeach
        </tbody>
      </table>

      <a href="/products/create" class="btn btn-dark btn-sm">Criar novo produto</a>


</div>

@endsection