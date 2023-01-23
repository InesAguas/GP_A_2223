@extends('master')

@section('header')
@include('navbar')
@endsection

@section('content')
      <div class="row p-4">
            <div class="col">
              
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                          <div class="col-4">

                          </div>
                          <div class="col-4">

                          </div>
                          <div class="col-4">
                            <button type="button" class="btn bg-light w-100">Resumo da Encomenda</button>
                          </div>
                        </div>
                        <form method="POST" action="/utilizador/checkout" enctype="multipart/form-data">
                            @csrf
                        <div class="row p-3 ">
                          <div class="col-4 bg-light rounded border border-light p-5 ">
                            <div class="row">
                              <div class="col-12 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                                  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                </svg>
                              </div>
                              <div class="col-12 text-center">
                                <input type="radio" id="home" name="shipping" value="home">
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                  <p class="card-text ">
                                    <small class="text-muted">Nome: <input type='text' name='nome' value='{{Auth::user()->u_nome}}' disabled=true id="nome"><span></span></small>
                                    <br>
                                    <small class="text-muted">Morada: <input type='text' name='morada' value='{{Auth::user()->u_morada}}' disabled=true id="morada"><span></span></small>
                                    <br>
                                    <small class="text-muted">Código Postal: <input type='text' name='codigoPostal' value='' disabled=true id="codigoPostal"><span></span></small>
                                    <br>
                                    <small class="text-muted">Telemóvel: <input type='text' name='telemovel' value='{{Auth::user()->u_telefone}}' disabled=true id="telemovel"><span></span></small>
                                    <br>
                                    <small class="text-muted">NIF: <input type='text' name='nif' value='{{Auth::user()->u_contribuinte}}' disabled=true id="nif"><span></span></small>
                                  </p>
                                  <p class="ms-4">
                                    <button class="navbar-toggler" type="button" onclick="ativarForm()"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                      <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                      <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                    </svg>
                                    <small class="text-muted">Editar Dados de Entrega<span></span></small></button>
                                  </p>
                                </div>
                            </div>
                          </div>

                          <div class="col-4 bg-light rounded border border-light p-5">
                            <div class="row ">
                              <div class="col-12 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                                </svg>
                              </div>
                              <div class="col-12 text-center">
                                <input type="radio" id="store" name="shipping" value="store">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12">
                                <p class="card-text ">
                                  <small class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                  </svg>  Sennor das almas.   Noqueira cravo.
                                    Oliveira
                                    do Hospital. Coimbra
                                    3400-494 <span></span></small>
                                  <br>
                                  <p class="text-muted"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                  </svg> 238 605 778<span></span></p>
                                  <p class="text-muted"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                                  </svg> gpa2223estgoh@gmail.com <span></span></p>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="row">
                              <div class="col-12 p-4 text-center">
                                <h5>Total: {{$total}}€ ({{count($produtos)}} Items)</h5>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12">
                                <div class="dropdown w-100">
                                  <button class="btn bg-light text-center w-100 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Detalhes
                                  </button>
                                  <ul class="dropdown-menu">
                                    @foreach($produtos as $produto)
                                    <li> <div class="row ">
                                        <div class="col">
                                          <div class="card ">
                                            <div class="row g-0 d-flex align-items-center">
                                              <div class="col-4">
                                                <img src="/img/produtos/{{$produto->p_imagem}}" class="card-img-top" alt="...">
                                              </div>
                                              <div class="col-8">
                                                <div class="card-body">
                                                  <h6 class="card-title">{{$produto->p_nome}}</h6>
                                                  <p class="card-text">
                                                    <small class="text-muted">Quantidade: <span>{{$produto->c_quantidade}}</span></small> <br>
                                                    {{$produto->p_preco}}€ 
                                                  </p>
                                                </div>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                      </div></li>
                                    @endforeach

                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-3">

                          </div>
                          <input type="hidden" id="total" name="total" value="{{$total}}">
                          <div class="col-2 rounded-pill">
                            <button type="submit" class="btn btn-secondary rounded-pill color-green-2 w-100">Finalizar Compra <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                            </svg></button>
                          </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div> 
        </div>
        <script>
            function ativarForm() {
                
            }
            </script>
        @endsection