@extends('master')

@section('header')
@include('navbar')
@endsection

@section('content')
<div class="row mt-5 mb-5 ">
<div class="col">
    <div class="card">
        <div class="card-body">
    <form method="POST" action="/produtos/criarproduto" enctype="multipart/form-data">
        @csrf
        <div class="row p-3">
            <div class="col">
        <label for="nome">Indique o nome do produto:</label>
        <input type='text' name='nome' class="form-control mb-3 bg-light" >
        <label for="categoria">Indique a categoria do produto:</label>
        <input type='text' name='categoria' class="form-control mb-3 bg-light" >
        <label for="preco">Indique o preço do produto:</label>
        <input type='number' name='preco' step=".01" class="form-control mb-3 bg-light" >
        <label for="stock">Indique a quantidade de stock:</label>
        <input type='number' name='stock' class="form-control mb-3 bg-light" >
        <label for="descricao">Indique a descrição do produto:</label>
        <input type='text' name='descricao' class="form-control mb-3 bg-light" >
        <label for="imagens">Indique as imagens do produto: </label>
        <input type="file"  accept="image/jpeg, image/png" name="imagens[]" multiple>
            </div>
        </div>
        <div class="row p-3 mb-3">
            <div class="col text-center">
        <input type='submit' value='Confirmar'>
            </div>
        </div>
    </form>
</div>
</div>
</div>
@if ($errors->any())
        <div class="row p-3 mb-3">
            <div class="col text-center">
                <div class="alert alert-warning" role="alert">
                    {{ $errors->first() }}
                </div>
            </div>
        </div>
        @endif
</div>
@endsection