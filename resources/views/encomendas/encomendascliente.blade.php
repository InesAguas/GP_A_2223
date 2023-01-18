@extends('master')

@section('header')
@include('navbar')
@endsection

@section('content')
<div class="row mt-3 bg-light banner">
  <div class="col">
    <img src="/img/img_paginainicial.png" height="200" width="1300">
  </div>
</div>

<div class="row mt-3 g-2 g-lg-3 bg-light">
  <div class="col-3 ">
    <!--barra de navegação lateral-->
    <div class="card">
      <div class="card-body">
        <p class="card-text"><small class="text-muted">Filtros</small></p>
        <div>
          <input class="form-check-input" type="checkbox" value="1" id="flex1" onClick="stockFilter(this)" @if($filter != null && $filter == 1) checked @endif>
          <label class="form-check-label" for="flexCheckDefault"><small class="text-muted">Apenas encomendas entreques</small></label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" value="2" id="flex2" onClick="stockFilter(this)" @if($filter != null && $filter == 2) checked @endif>
          <label class="form-check-label" for="flexCheckDefault"><small class="text-muted">Apenas encomendas p. confirmar</small></label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" value="3" id="flex3" onClick="stockFilter(this)" @if($filter != null && $filter == 3) checked @endif>
          <label class="form-check-label" for="flexCheckDefault"><small class="text-muted">Apenas encomendas canceladas</small></label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" value="4" id="flex4" onClick="stockFilter(this)" @if($filter != null && $filter == 4) checked @endif>
          <label class="form-check-label" for="flexCheckDefault"><small class="text-muted">Apenas encomendas confirmandas</small></label>
        </div>    
      </div>
    </div>
    
    <div class="card mt-4">
      <div class="card-body">
        <div data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
          <div><small>Valor da encomenda</small></div>
          <div>
            <label for="customRange2" class="form-label text-center">0$ - 50$</label>
            <input type="range" class="form-range" min="0" max="100" id="customRange2">
          </div>
        </div>   
      </div>
    </div>
  </div>
  <div class="col-9">
    <div class="row">
      
      <div class="col d-flex justify-content-end align-items-center">
        <p class="m-2"> <small>ENCOMENDAS POR PAGINA</small> </p>
        
        <div class="dropdown me-3">
          <button type="button" class="btn border border-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">{{$produtospagina}}
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('/administracao/encomendas/?produtospagina=10' . '&ordem=' . $ordem)}}">10</a></li>
            <li><a class="dropdown-item" href="{{url('/administracao/encomendas/?produtospagina=15' . '&ordem=' . $ordem)}}">15</a></li>
            <li><a class="dropdown-item" href="{{url('/administracao/encomendas/?produtospagina=20' . '&ordem=' . $ordem)}}">20</a></li>
          </ul>
        </div>
        
        <div class="dropdown ">
          <button type="button" class="btn border border-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20"><small>@if($ordem == null || $ordem == 0) Data @elseif($ordem == 1) Data (mais antiga) @else Data (mais recente) @endif</small>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('/administracao/encomendas/?produtospagina=' . $produtospagina . '&ordem=1')}}">Data (mais antiga)</a></li>
            <li><a class="dropdown-item" href="{{url('/administracao/encomendas/?produtospagina=' . $produtospagina . '&ordem=2')}}">Data (mais recente)</a></li>
            <li><a class="dropdown-item" href="{{url('/administracao/encomendas/?produtospagina=' . $produtospagina . '&ordem=0')}}">Sem ordem</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    @if (count($encomendas) >= 1)
    @foreach ($encomendas as $encomenda)
    <div class="row g-2 mt-1">
      <div class="col">
        <div class="card ">
          <div class="row g-0 d-flex align-items-center">
            <div class="col-4">
              <img src="https://www.auchan.pt/dw/image/v2/BFRC_PRD/on/demandware.static/-/Sites-auchan-pt-master-catalog/default/dw70ed3673/images/hi-res/002116994.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col-4">
              <div class="card-body">
                <h6 class="card-title">{{$encomenda->p_nome}}</h6>
                <p class="card-text"><small class="text-muted">Data da encomenda: {{$encomenda->e_data_criada}}</small> <br>
                  <small class="text-muted">Data da entrega: @if($encomenda->e_data_entrega != null) {{$encomenda->e_data_entrega}} @else Ainda não entregue @endif</small> <br>
                  {{$encomenda->e_total}}€ <br>
                  Cliente:  {{$encomenda->u_nome}}
                </p>
              </div>
            </div>
            <div class="col-4 text-center">
              @if($encomenda->e_estado == 'cancelada')
                <h5>Encomenda cancelada</h5>
              <div >
                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                  </svg>
              </div>
              @elseif($encomenda->e_data_confirmada != null)
              <h5>Encomenda confirmada</h5>
              <div >
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
              </div>
              @else
              <h5>Confirmar encomenda?</h5>
              <div >
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                  </svg>
                </button>
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                  </svg>
                </button>
              </div>
              @endif
              
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach

    @endif
    
    <div class="row mt-2">
      <div class="col">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            @if($pagina > 1)
            <li class="page-item">
              @else
              <li class="page-item disabled">
                @endif
                <a class="page-link"  href="{{url('/administracao/encomendas/?pagina=' . ($pagina-1) . '&produtospagina=' . $produtospagina . '&ordem=' . $ordem . '&filter=' . $filter)}}">Previous</a>
              </li>
              @for($i = 1; $i <= $totalpaginas; $i++)
              @if($i == $pagina)
              <li class="page-item active">
                @else
                <li class="page-item">
                  @endif
                  <a class="page-link" href="{{url('/administracao/encomendas/?pagina=' . $i . '&produtospagina=' . $produtospagina . '&ordem=' . $ordem . '&filter=' . $filter)}}">{{$i}}</a></li>
                  @endfor
                  @if($totalpaginas > $pagina)
                  <li class="page-item">
                    @else
                    <li class="page-item disabled">
                      @endif
                      <a class="page-link" href="{{url('/administracao/encomendas/?pagina=' . ($pagina+1) . '&produtospagina=' . $produtospagina . '&ordem=' . $ordem . '&filter=' . $filter)}}">Next</a>
                    </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<script>
  function stockFilter(cb) {  
    if(cb.checked) {
      url = "{{url('/administracao/encomendas/?produtospagina=' . $produtospagina . '&ordem=' . $ordem . '&filter=value')}}";
              url = url.replace(/&amp;/g, "&");
              url = url.replace('value', cb.value);
              console.log(url);
              window.location.href = url;  
    } else {
      url = "{{url('/administracao/encomendas/?produtospagina=' . $produtospagina . '&ordem=' . $ordem)}}";
      url = url.replace(/&amp;/g, "&");
      window.location.href = url;
    }
  }
</script>
@endsection