@extends('master')

@section('header')
@include('navbar')
@endsection

@section('content')
<div class="row mt-3 g-2 g-lg-3 bg-light">
  <div class="col-3 ">
    <!--barra de navegação lateral-->
    <div class="card">
        <div class="card-body">
            <p class="card-text"><small class="text-muted">Filtros</small></p>
            <div>
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault"><small class="text-muted">Apenas encomendas entreques</small></label>
            </div>
            <div>
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefau">
              <label class="form-check-label" for="flexCheckDefault"><small class="text-muted">Apenas encomendas p. confirmar</small></label>
            </div>
            <div>
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaul">
              <label class="form-check-label" for="flexCheckDefault"><small class="text-muted">Apenas encomendas canceladas</small></label>
            </div>
            <div>
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefa">
              <label class="form-check-label" for="flexCheckDefault"><small class="text-muted">Apenas encomendas confirmandas</small></label>
            </div>    
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
          <div data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
            <div><small>Valor da encomenda</small></div>
            <div class="collapse" id="collapse3">
                <label for="customRange2" class="form-label text-center">0$ - 50$</label>
                <input type="range" class="form-range" min="0" max="100" id="customRange2">
            </div>
          </div>
        
          <div>
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDef">
            <label class="form-check-label" for="flexCheckDefault"><small class="text-muted">Apenas encomendas confirmandas</small></label>
          </div>    
        </div>
    </div>
</div>
<div class="col-9">
  @if (count($produtos) == 0)
  <h1>Sem produtos</h1>
  @else
  @foreach($produtos as $produto)
  <div class="row g-2 mt-1">
    <div class="col">
      <div class="card ">
        <div class="row g-0 d-flex align-items-center">
          <div class="col-4">
            <img src="/img/produtos/{{$produto->p_imagem}}" class="card-img-top" alt="...">
          </div>
          <div class="col-4 text-center">
            <div class="card-body">
              <div class="p-3 mb-2 bg-secondary text-white"> {{$produto->p_nome}}</div>
              <div class="p-3 mb-2 bg-secondary text-white">{{$produto->p_categoria}}</div>
              <div class="p-3 mb-2 bg-secondary text-white">{{$produto->p_preco}}</div>
            </div>
          </div>
          <div class="col-4 text-center">
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
              </svg>
              </button>
          </div>
          
  </div>
</div>
</div>
  @endforeach
  @endif
</div>
</div>
@endsection
