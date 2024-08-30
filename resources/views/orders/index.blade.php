@extends('layouts.main')

@section('content')


<form action="/products/create" method="post">
    @csrf
    <div class="container">

        <div class="form-group my-sm-5">
            <input type="text" class="form-control" placeholder="Nome do Produto" name="name">
        </div>
        <div class="form-group my-sm-5">
            <label for="image">Imagem do projecto</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group my-sm-5">
            <select type="text" class="form-control" name="category">
                <option value="categoria1">Categoria 1</option>
                <option value="categoria2">Categoria 2</option>
                <option value="categoria3">Categoria 3</option>
            </select>
        </div>

        <div class="form-group my-sm-5">
            <textarea type="text" class="form-control" name="description">Descricao do Produto</textarea>
        </div>
        <button class="btn btn-danger" type="submit">Enviar</button>
    </div>
</form>
@endsection