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

<!--Falta trocar as categorias-->
<div class="row mt-3 bg-light">
  <div class="col d-flex flex-column align-items-center mt-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-cup-straw" viewBox="0 0 16 16">
      <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
    </svg>
    <p class=""><small>categoria 1</small> </p>
  </div>
  <div class="col d-flex flex-column align-items-center mt-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-cup-straw" viewBox="0 0 16 16">
      <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
    </svg>
    <p class=""><small>categoria 1</small> </p>
  </div>
  <div class="col d-flex flex-column align-items-center mt-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-cup-straw" viewBox="0 0 16 16">
      <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
    </svg>
    <p class=""><small>categoria 1</small> </p>
  </div>
  <div class="col d-flex flex-column align-items-center mt-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-cup-straw" viewBox="0 0 16 16">
      <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
    </svg>
    <p class=""><small>categoria 1</small> </p>
  </div>
  <div class="col d-flex flex-column align-items-center mt-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-cup-straw" viewBox="0 0 16 16">
      <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
    </svg>
    <p class=""><small>categoria 1</small> </p>
  </div>
  <div class="col d-flex flex-column align-items-center mt-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-cup-straw" viewBox="0 0 16 16">
      <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
    </svg>
    <p class=""><small>categoria 1</small> </p>
  </div>
  <div class="col d-flex flex-column align-items-center mt-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-cup-straw" viewBox="0 0 16 16">
      <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
    </svg>
    <p class=""><small>categoria 1</small> </p>
  </div>
  <div class="col d-flex flex-column align-items-center mt-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-cup-straw" viewBox="0 0 16 16">
      <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
    </svg>
    <p class=""><small>categoria 1</small> </p>
  </div>
  <div class="col d-flex flex-column align-items-center mt-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-cup-straw" viewBox="0 0 16 16">
      <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
    </svg>
    <p class=""><small>categoria 1</small> </p>
  </div>
</div>


<div class="row mt-3 g-2 g-lg-3 bg-light">
  <div class="col-3 ">
    <!--barra de navegação lateral-->
    <div class="card">
      <div class="card-body">
        <p class="card-text"><small class="text-muted">Filtros</small></p>
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault"><small class="text-muted"> Apenas produtos em stock</small></label> <br>
        <ul>
          <li class="" data-bs-toggle="collapse" href="#collapse1"      role="button" aria-expanded="false" aria-controls="collapse1">
            <a href="#"><small>sub-categoria</small></a>
            
            <div class="collapse" id="collapse1">
              <ul>
                <li><a href="#">sub-categoria</a></li>
                <li><a href="#">sub-categoria</a></li>
                <li><a href="#">sub-categoria</a></li>
              </ul>
            </div>
          </li>
          <li class="" data-bs-toggle="collapse" href="#collapse2"      role="button" aria-expanded="false" aria-controls="collapse2">
            <a href="#"><small>Categoria 3</small></a>
            
            <div class="collapse" id="collapse2">
              <ul>
                <li><a href="#">sub-categoria</a></li>
                <li><a href="#">sub-categoria</a></li>
                <li><a href="#">sub-categoria</a></li>
              </ul>
            </div>
          </li>
          <li class="" data-bs-toggle="collapse" href="#collapse3"      role="button" aria-expanded="false" aria-controls="collapse3">
            <a href="#"><small>sub-categoria</small></a>
            
            <div class="collapse" id="collapse3">
              
              <label for="customRange2" class="form-label">0$ - 50$</label>
              <input type="range" class="form-range" min="0" max="5" id="customRange2">
            </div>
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
            <li><a class="dropdown-item" href="{{url('/?pagina=' . $pagina . '&produtospagina=9' . '&ordem=' . $ordem)}}">9</a></li>
            <li><a class="dropdown-item" href="{{url('/?pagina=' . $pagina . '&produtospagina=12' . '&ordem=' . $ordem)}}">12</a></li>
            <li><a class="dropdown-item" href="{{url('/?pagina=' . $pagina . '&produtospagina=15' . '&ordem=' . $ordem)}}">15</a></li>
          </ul>
        </div>
        
        <div class="dropdown ">
          <button type="button" class="btn border border-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20"><small>Preço</small>
            
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('/?pagina=' . $pagina . '&produtospagina=' . $produtospagina . '&ordem=1')}}">Descendente</a></li>
            <li><a class="dropdown-item" href="{{url('/?pagina=' . $pagina . '&produtospagina=' . $produtospagina . '&ordem=2')}}">Ascendente</a></li>
            <li><a class="dropdown-item" href="{{url('/?pagina=' . $pagina . '&produtospagina=' . $produtospagina . '&ordem=0')}}">Sem ordem</a></li>
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
            <p class="card-text"><small class="text-muted">{{$produto->p_nome}}</small> <br>
              {{$produto->p_preco}} € <br>
              <small class="text-muted">Descrição</small><br> 
              <small> {{$produto->p_descricao}} </small></p>
              <div class="row d-flex flex-row align-items-center ">
                <div class="col-1">
                  
                </div>
                <div class="col-4 d-flex ">
                  <!--Aqui sao as estrelas, tem de se mudar consoante as reviews-->
                  @for($j = 0; $j < 5; $j++)
                    @if($produto->p_review > $j)
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" class="bi bi-star" viewBox="0 0 16 16">
                      <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg>
                    @endif
                  @endfor
                </div>
                <div class="col-3 mt-3 ">
                  <p>{{number_format($produto->p_review,2)}}</p>
                </div>
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="aqua" class="bi bi-bag-heart" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
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
      
      @if(count($produtos) < $produtospagina)
      @for($i = count($produtos)+1; $i <= $produtospagina; $i++)
      @if ($i == 1 || $i == 4 || $i == 7 || $i == 10 || $i == 13)
      <div class="row g-2 mt-1">
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
                  <a class="page-link"  href="{{url('/?pagina=' . ($pagina-1) . '&produtospagina=' . $produtospagina . '&ordem=' . $ordem)}}">Previous</a>
                </li>
                @for($i = 1; $i <= $totalpaginas; $i++)
                @if($i == $pagina)
                <li class="page-item active">
                  @else
                  <li class="page-item">
                    @endif
                    <a class="page-link" href="{{url('/?pagina=' . $i . '&produtospagina=' . $produtospagina . '&ordem=' . $ordem)}}">{{$i}}</a></li>
                    @endfor
                    @if($totalpaginas > $pagina)
                    <li class="page-item">
                      @else
                      <li class="page-item disabled">
                        @endif
                        <a class="page-link" href="{{url('/?pagina=' . ($pagina+1) . '&produtospagina=' . $produtospagina . '&ordem=' . $ordem)}}">Next</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          
          @endsection