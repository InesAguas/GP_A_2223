@extends('master')

@section('header')
@include('navbar')
@endsection

@section('content')
<div class="row mt-5 mb-5 ">
<div class="col">
    <div class="card bg-light">
        <div class="card-body">
            <div class="row text-center">
                <div class="col p-3">
                  <h2>Alteração de um produto</h2>
                </div>
              </div>
    <form method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row ">
            <div class="col">
              <div class=" row d-flex">
                <div class="col-4">
        <label for="nome" class="form-label">Indique o nome do produto:</label>
                </div>      
                <div class="col-8">   
                <input type='text' name='nome' class="form-control mb-3" value='{{$produto->p_nome}}'>
    </div>
</div>
            </div>
        </div>
        
        <div class="row ">
            <div class="col">
              <div class=" row d-flex">
                <div class="col-4">
        <label for="categoria" class="form-label">Indique a categoria do produto:</label>
    </div>      
    <div class="col-8">  
        <input type='text' name='categoria' class="form-control mb-3" value='{{$produto->p_categoria}}'>
        </div>
</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class=" row d-flex">
                <div class="col-4">
        <label for="preco" class="form-label">Indique o preço do produto:</label>
        <input type='number' name='preco' step=".01" class="form-control mb-3" value='{{$produto->p_preco}}'>
                </div>
                <div class="col-8">
        <label for="stock" class="form-label">Indique a quantidade de stock:</label>
        <input type='number' name='stock' class="form-control mb-3" value='{{$produto->p_stock}}'>
                </div>
            </div>
        </div>
        </div>
        <label for="descricao" class="form-label">Indique a descrição do produto:</label>
        <textarea name='descricao' class="form-control mb-3" rows="3">{{$produto->p_descricao}}</textarea>
        <label for="imagens" class="form-label">Indique as imagens do produto: </label>
        <input type="file"  accept="image/jpeg, image/png" name="imagens[]" multiple onchange="showImages(this)">
        <div class="row p-3" id="imagearea">
            @foreach($produto->p_imagem as $image)
        <div class='col-2'><img src='/img/produtos/{{$image}}' height='125' width='150'></div>
        @endforeach
          </div>
        <div class="row p-3 mb-3">
            <div class="col text-center">
        <input type='submit' value='Confirmar' class="btn btn-success">
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

        @if(session('sucesso') != null)
                    <div class="row p-3 mb-3">
                        <div class="col text-center">
                            <div class="alert alert-success" role="alert">
                                {{session('sucesso')}}
                            </div>
                        </div>
                    </div>
                    @endif
</div>

<script>
    function showImages(input) {
        document.getElementById("imagearea").innerHTML = "";
        for (let i = 0; i < input.files.length; i++) {
            document.getElementById("imagearea").innerHTML += "<div class='col-2'><img src='" + URL.createObjectURL(event.target.files[i]) + "' height='125' width='150'></div>"
        }
    }
    </script>

@endsection