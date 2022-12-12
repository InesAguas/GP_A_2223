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
    <form method="POST" action="/criarproduto">
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
        <input type='submit' value='Submit'><br>
    </form>
</div>
@endsection