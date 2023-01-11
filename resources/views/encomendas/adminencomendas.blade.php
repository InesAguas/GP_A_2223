<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

    <header>
        <!--navbar-->
        <nav class="navbar ">
            <div class="container-fluid ">
              <a class="navbar-brand" href="#">Logo</a>
              
              
              <div >
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-cart-check-fill " viewBox="0 0 20 16"><path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/></svg></a>

                  <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-star-fill" viewBox="0 0 20 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-person-fill color-green-1" viewBox="0 0 18 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                      </svg></span>
                  </button>
              </div>
              

              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <h5 class="offcanvas-title me-5" id="offcanvasNavbarLabel">Olá Nome do Utilizador</h5>
                </div>

                <div class="offcanvas-body ">
                  <ul class="navbar-nav justify-content-center align-items-center d-flex ">
                    <li class="nav-item p-2">
                      <a class="nav-link active" aria-current="page" href="#">Dados Pessoais</a>
                    </li>

                    <li class="nav-item p-2">
                      <a class="nav-link active" href="#">As minhas encomendas</a>
                    </li>

                    <li class="nav-item p-3">
                        <button type="button" class="btn btn-outline-secondary">Terminar Sessão</button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <main class="container ">
    
        <div class="row mt-3 bg-light banner">
              <div class="col">
                <h1>imagem</h1>
              </div>
        </div>
        
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
                <div class="row">
                    
                    <div class="col d-flex justify-content-end align-items-center">
                        <p class="m-2"> <small>ENCOMENDAS POR PAGINA</small> </p>
                       
                        <div class="dropdown me-3">
                            <button type="button" class="btn border border-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">9
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">9</a></li>
                              <li><a class="dropdown-item" href="#">12</a></li>
                              <li><a class="dropdown-item" href="#">15</a></li>
                            </ul>
                        </div>
                    
                        <div class="dropdown ">
                            <button type="button" class="btn border border-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20"><small>Data (mais antiga)</small>
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">10</a></li>
                              <li><a class="dropdown-item" href="#">20</a></li>
                              <li><a class="dropdown-item" href="#">30</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row g-2 mt-1">
                  <div class="col">
                    <div class="card ">
                      <div class="row g-0 d-flex align-items-center">
                        <div class="col-4">
                          <img src="https://www.auchan.pt/dw/image/v2/BFRC_PRD/on/demandware.static/-/Sites-auchan-pt-master-catalog/default/dw70ed3673/images/hi-res/002116994.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="col-4">
                          <div class="card-body">
                            <h6 class="card-title">Leite Uht Magro Mimosa 6x1L + 5</h6>
                            <p class="card-text"><small class="text-muted">Data da encomenda: 28/10/2022</small> <br>
                              <small class="text-muted">Data da entrega: Ainda não entregue</small> <br>
                              17.48€ <br>
                              Cliente: Pedro Martins
                            </p>
                          </div>
                        </div>
                        <div class="col-4 text-center">
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
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row g-2 mt-1">
                  <div class="col">
                    <div class="card ">
                      <div class="row g-0 d-flex align-items-center">
                        <div class="col-4">
                          <img src="https://www.auchan.pt/dw/image/v2/BFRC_PRD/on/demandware.static/-/Sites-auchan-pt-master-catalog/default/dw70ed3673/images/hi-res/002116994.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="col-4">
                          <div class="card-body">
                            <h6 class="card-title">Leite Uht Magro Mimosa 6x1L + 5</h6>
                            <p class="card-text"><small class="text-muted">Data da encomenda: 28/10/2022</small> <br>
                              <small class="text-muted">Data da entrega: Ainda não entregue</small> <br>
                              17.48€ <br>
                              Cliente: Pedro Martins
                            </p>
                          </div>
                        </div>
                        <div class="col-4 text-center">
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
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="row mt-2">
                    <div class="col">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                              <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                              </li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>