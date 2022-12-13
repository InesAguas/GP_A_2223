@extends('master')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container2">
    <form method="POST" action="/criarproduto" enctype="multipart/form-data">
        @csrf
        <label for="nome">Indique o nome do produto:</label><br>
        <input type='text' name='nome'><br>
        <label for="categoria">Indique a categoria do produto:</label><br>
        <input type='text' name='categoria'><br>
        <label for="preco">Indique o preço do produto:</label><br>
        <input type='number' name='preco'><br>
        <label for="stock">Indique a quantidade de stock:</label><br>
        <input type='number' name='stock'><br>
        <label for="descricao">Indique a descrição do produto:</label><br>
        <input type='text' name='descricao'><br>
        <label for="imagens">Indique as imagens do produto: </label>
        <input type="file"  accept="image/jpeg, image/png" name="imagens[]" multiple><br>
        //falta usar JS para limitar o numero de imagens para 7
        <input type='submit' value='Submit'><br>
    </form>
</div>
@endsection