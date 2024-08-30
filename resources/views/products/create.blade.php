@extends('layouts.main')

@section('content')


<form action="/products/create" method="post">
    @csrf
    <div class="container">
        <div class="form-group my-sm-2">
            <input type="text" class="form-control" placeholder="Nome do Produto" name="name">
        </div>
        <div class="form-group my-sm-2">
            <select type="text" class="form-control" name="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group my-sm-2">
            <textarea type="text" class="form-control" name="description">Descricao do Produto</textarea>
        </div>
        <button class="btn btn-dark" type="submit">Enviar</button>
    </div>
</form>
@endsection