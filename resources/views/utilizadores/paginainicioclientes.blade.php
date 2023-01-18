@extends('master')

@section('header')
@include('navbarprocura')
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
        @if($stock == 1)
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" onClick="stockFilter(this)" checked>
        @else
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" onClick="stockFilter(this)">
        @endif
        <label class="form-check-label" for="flexCheckDefault"><small class="text-muted"> Apenas produtos em stock</small></label> <br>
        <ul>
          @foreach($categorias as $categoria)
          <li><a href="{{url('/?categoria=' . $categoria)}}">{{$categoria}}</a></li>
          @endforeach
          </li>
          <li class="" data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
            <small>Preço</small>

            <label for="customRange2" class="form-label">0€ - 1000€</label>
            <input type="range" class="form-range" min="0" max="100" id="customRange2">
          </li>
        </ul>


      </div>
    </div>
  </div>

  <div class="col-9">
    <div class="row">

      <div class="col d-flex justify-content-end align-items-center">
        <p class="m-2"> <small>Produtos por página</small> </p>

        <div class="dropdown me-3">
          <button type="button" class="btn border border-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">{{$produtospagina}}
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('/?produtospagina=9' . '&ordem=' . $ordem . '&stock=' . $stock)}}">9</a></li>
            <li><a class="dropdown-item" href="{{url('/?produtospagina=12' . '&ordem=' . $ordem . '&stock=' . $stock)}}">12</a></li>
            <li><a class="dropdown-item" href="{{url('/?produtospagina=15' . '&ordem=' . $ordem . '&stock=' . $stock)}}">15</a></li>
          </ul>
        </div>

        <div class="dropdown ">
          <button type="button" class="btn border border-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20"><small>Preço</small>

          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('/?produtospagina=' . $produtospagina . '&ordem=1' . '&stock=' . $stock)}}">Descendente</a></li>
            <li><a class="dropdown-item" href="{{url('/?produtospagina=' . $produtospagina . '&ordem=2' . '&stock=' . $stock)}}">Ascendente</a></li>
            <li><a class="dropdown-item" href="{{url('/?produtospagina=' . $produtospagina . '&ordem=0' . '&stock=' . $stock)}}">Sem ordem</a></li>
          </ul>
        </div>
      </div>
    </div>

    @if (count($produtos) >= 1)
    @php ($i = 0)
    @foreach ($produtos as $produto)
    @php ($i++)
    @if ($i == 1 || $i == 4 || $i == 7 || $i == 10 || $i == 13)
    <div class="row g-2 mt-1">
      @endif
      <div class="col">
        <div class="card">
          <img src="img/produtos/{{$produto->p_imagem}}" class="card-img-top" height="250" alt="{{$produto->p_nome}}">
          <div class="card-body">
            <p class="card-text"><small class="text-muted"> <a href="/produtos/{{$produto->p_id}}/detalhes">{{$produto->p_nome}}</a> </small> <br>
              {{$produto->p_preco}} € <br>
              <small class="text-muted">Descrição</small><br>
              <small> {{$produto->p_descricao}} </small>
            </p>
            <div class="row d-flex flex-row align-items-center ">
              <div class="col-1">

              </div>
              <div class="col-4 d-flex ">
                <!--Aqui sao as estrelas, tem de se mudar consoante as reviews-->
                @for($j = 0; $j < 5; $j++) @if($produto->p_review > $j)
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  @else
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" class="bi bi-star" viewBox="0 0 16 16">
                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                  </svg>
                  @endif
                  @endfor
              </div>
              <div class="col-3 mt-3 ">
                <p>{{number_format($produto->p_review,2)}}</p>
              </div>
              <div class="col-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="aqua" class="bi bi-bag-heart" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                </svg>
              </div>

            </div>
          </div>
        </div>
      </div>
      @if ($i == 3 || $i == 6 || $i == 9 || $i == 12 || $i == 15)
    </div>
    @endif

    @endforeach
    @endif

    @if(count($produtos) < $produtospagina) @for($i=count($produtos)+1; $i <=$produtospagina; $i++) @if ($i==1 || $i==4 || $i==7 || $i==10 || $i==13) <div class="row g-2 mt-1">
      @endif
      <div class="col">
      </div>
      @if ($i == 3 || $i == 6 || $i == 9 || $i == 12 || $i == 15)
  </div>
  @endif

  @endfor
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
            <a class="page-link" href="{{url('/?pagina=' . ($pagina-1) . '&produtospagina=' . $produtospagina . '&ordem=' . $ordem . '&stock=' . $stock)}}">Previous</a>
          </li>
          @for($i = 1; $i <= $totalpaginas; $i++) @if($i==$pagina) <li class="page-item active">
            @else
            <li class="page-item">
              @endif
              <a class="page-link" href="{{url('/?pagina=' . $i . '&produtospagina=' . $produtospagina . '&ordem=' . $ordem . '&stock=' . $stock)}}">{{$i}}</a>
            </li>
            @endfor
            @if($totalpaginas > $pagina)
            <li class="page-item">
              @else
            <li class="page-item disabled">
              @endif
              <a class="page-link" href="{{url('/?pagina=' . ($pagina+1) . '&produtospagina=' . $produtospagina . '&ordem=' . $ordem . '&stock=' . $stock)}}">Next</a>
            </li>
        </ul>
      </nav>
    </div>
  </div>
</div>
</div>

<script>
  function stockFilter(cb) {
    if (cb.checked) {
      url = "{{url('/?produtospagina=' . $produtospagina . '&ordem=' . $ordem . '&stock=1')}}";
      url = url.replace(/&amp;/g, "&");
      window.location.href = url;
    } else {
      url = "{{url('/?produtospagina=' . $produtospagina . '&ordem=' . $ordem . '&stock=0')}}";
      url = url.replace(/&amp;/g, "&");
      window.location.href = url;
    }
  }
</script>
@endsection