@extends('layouts.main')

@section('content')


<h2>Listagem dos Produtos</h2>
<div class="container mt-sm-5 d-flex">
    @foreach ($products as $product)
    <div class="card mx-sm-2" style="width: 18rem;">
        <img src="{{ $product->image }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $product->name}}</h5>
          <p class="card-text">{{ $product->description }}</p>
          <a href="#" class="btn btn-dark btn-sm">Adicionar</a>
        </div>
      </div>
    @endforeach

</div>
@endsection