@extends('master')

@section('header')
@include('navbar')
@endsection

@section('content')
<div class="row mt-3 bg-light text-center">
  <div class="col">
    <h1>Seus Produtos</h1>
  </div>
</div>


<div class="row mt-3 g-2 g-lg-3 bg-light">
<div class="col-3 ">
    <!--barra de navegação lateral-->
    <div class="card">
        <div class="card-body">
            <p class="card-text"><small class="text-muted">Filtros</small></p>
            <ul>
              @if (count($categorias) != 0)
              <li>Por categoria</small></li>
              <ul>
                @foreach($categorias as $categoria)
                <li><a href="{{url('/produtos/verprodutos?categoria=' . $categoria)}}">{{$categoria}}</a></li>
                @endforeach
              </ul>
              @endif
              <li>Por preco</small></li>
              <ul>
                <li><a href="{{url('/produtos/verprodutos?preco=1')}}">0.00€ - 3.99€</a></li>
                <li><a href="{{url('/produtos/verprodutos?preco=2')}}">4.00€ - 7.99€</a></li>
                <li><a href="{{url('/produtos/verprodutos?preco=3')}}">8.00€ - 9.99€</a></li>
                <li><a href="{{url('/produtos/verprodutos?preco=4')}}">10.00€ ou mais</a></li>
              </ul>
              <li>Por avaliação</small></li>
              <ul>
                <li><a href="{{url('/produtos/verprodutos?aval=1')}}">Entre 0 e 1</a></li>
                <li><a href="{{url('/produtos/verprodutos?aval=2')}}">Entre 1 e 2</a></li>
                <li><a href="{{url('/produtos/verprodutos?aval=3')}}">Entre 2 e 3</a></li>
                <li><a href="{{url('/produtos/verprodutos?aval=4')}}">Entre 3 e 4</a></li>
                <li><a href="{{url('/produtos/verprodutos?aval=5')}}">Entre 4 e 5</a></li>
              </ul>
            </ul>
        </div>
    </div>
</div>
<div class="col-9">
  @if(session('sucesso') != null)
                    <div class="row p-3 mb-3">
                        <div class="col text-center">
                            <div class="alert alert-success" role="alert">
                                {{session('sucesso')}}
                            </div>
                        </div>
                    </div>
                    @endif
    <div class="row">
        
        <div class="col">
          <form class="d-flex">
            <input class="form-control form-control-lg ps-3 " type="search" placeholder="Nome do produto" aria-label="Search" name="search">
            <button class="btn btn-outline-success color-green-2 rounded-circle " type="submit"><span ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></span></button>   
          </form>
          
        </div>
        <div class="col d-flex justify-content-end align-items-center" style="padding-right: 50px;">
          <a href="{{url('produtos/criarproduto')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
          </svg>
        </a>
        </div>
    </div>

    
    @if (count($produtos) == 0)
    <h1>Sem produtos</h1>
    @else
    <div style="overflow-y:scroll;overflow-x: hidden;max-height:1500px">
      @foreach($produtos as $produto)
      <div class="row g-2 mt-1">
        <div class="col">
          <div class="card ">
            <div class="row g-0 d-flex align-items-center">
              <div class="col-4">
                <img src="/img/produtos/{{$produto->p_imagem}}" class="card-img-top" style="max-height:200px" width="180" alt="...">
              </div>
              <div class="col-5 text-center">
                <p class="bg-light">{{$produto->p_nome}} </p>
                 <p class="bg-light">{{$produto->p_categoria}}</p> 
                 <p class="bg-light">
                  {{$produto->p_preco}}€
                 </p>
                  
              </div>
              <div class="col">
  
              </div>
              <div class="col-2 text-center ">
                
                <div class="d-flex flex-column p-3">
                  <a href="{{url('produtos/' . $produto->p_id . "/editarproduto")}}"  role="button" class="btn btn-success btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="45" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                      <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z"/>
                    </svg>
                 </a><br>
                 <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="45" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                      <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
      <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Apagar produto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Deseja mesmo apagar o produto "{{$produto->p_nome}}" ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <form method="post" action="/produtos/{{$produto->p_id}}/apagarproduto">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-primary">Apagar produto</button>
          </form>
        </div>
      </div>
    </div>
  </div>
      @endforeach
</div>
  @endif
</div>
</div>

@endsection


