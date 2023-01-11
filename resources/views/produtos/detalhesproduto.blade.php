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

    <main class="container">
      <div class="row mt-5 ">
          <form class="col">
                <div class="card bg-light">
                    <div class="card-body">

                      <div class="row g-1">
                        <div class="col-7 ">
                          <div class="row">
                            <div class="col m-3 p-3 bg-white">
                              <h5>Nome do produto:</h5> 
                            </div>
                          </div>
                          <div class="row m-1">
                            <div class="col-8 text-center m-1 bg-white" style=" max-height: 340px; ">
                              <img src="./Limpador-Concentrado-Querosene-Gel-Amolim-300x300.jpg.webp" alt="">
                            </div>
                            <div class="col ">
                              <div class="row gy-3 ">
                                <div class="col-6 ">
                                  <img src="./Limpador-Concentrado-Querosene-Gel-Amolim-300x300.jpg.webp" alt="" style="object-fit: contain;max-width: 100px;
                                  max-height: 100px;">
                                </div>
                                <div class="col-6">
                                  <img src="./Limpador-Concentrado-Querosene-Gel-Amolim-300x300.jpg.webp" alt="" style="object-fit: contain;max-width: 100px;
                                  max-height: 100px;">
                                </div>
                             
                                <div class="col-6">
                                  <img src="./Limpador-Concentrado-Querosene-Gel-Amolim-300x300.jpg.webp" alt="" style="object-fit: contain;max-width: 100px;
                                  max-height: 100px;">
                                </div>
                                <div class="col-6">
                                  <img src="./Limpador-Concentrado-Querosene-Gel-Amolim-300x300.jpg.webp" alt="" style="object-fit: contain;max-width: 100px;
                                  max-height: 100px;">
                                </div>
                                <div class="col-6">
                                  <img src="./Limpador-Concentrado-Querosene-Gel-Amolim-300x300.jpg.webp" alt="" style="object-fit: contain;max-width: 100px;
                                  max-height: 100px;">
                                </div>
                                <div class="col-6">
                                  <img src="./Limpador-Concentrado-Querosene-Gel-Amolim-300x300.jpg.webp" alt="" style="object-fit: contain;max-width: 100px;
                                  max-height: 100px;">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-5">
                          <div class="row">
                            <div class="col m-3 bg-white p-4" style="min-height: 300px;">
                              <p>Categoria: Legumes</p>
                              <p>Preço: 12.99€ /KG</p>
                              <p>Em stock: Sim</p>
                              <div class=" d-flex align-items-center">
                                Avaliação: 
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="yellow" class="bi bi-star-half m-1" viewBox="0 0 16 16">
                                  <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                </svg>
                              </div>
                            </div>
                          </div>
                          <div class="row p-3 m-1 d-flex align-items-center bg-white">
                            <div class="col ">
                              <button type="button" class="btn btn-success">Adicionar ao carrinho</button>
                            </div>
                            <div class="col ">
                              <button type="button" class="btn btn-success">Adicionar á lista de desejos</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row g-3 m-1 ">
                        <div class="col-7 ">
                          <div class="row">
                            <div class="col-12">
                              <div class="bg-white p-3">
                               <h5>Descrição do produto:</h5> 
                              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro sed odio iste ea ab architecto! Saepe consequuntur odio, accusamus sunt voluptatibus laboriosam! Obcaecati, dolor corrupti fugiat ex vitae quasi debitis.</p>
                              </div>
                            </div>
                            <div class="col-12 d-flex flex-column align-items-end mt-2">
                              <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escreva aqui o seu comentário" rows="5"></textarea>
                              <button type="button" class="btn btn-secondary m-2">Adicionar</button>
                            </div>
                          </div>
                          
                        </div>

                        <div class="col-5 p-3 bg-white scroll-container" style=" max-height: 300px;
                        overflow-y: scroll;
                        scroll-behavior: smooth;">
                          <h5>Comentários:</h5>
                          <ul>
                            <li>
                              
                              <div class=" d-flex align-items-center">
                                Cliente - Avaliação: 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-half m-1" viewBox="0 0 16 16">
                                  <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                </svg>
                              </div>

                              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam voluptas recusandae maiores possimus cum harum cupiditate nisi suscipit, illum fugiat cumque sint modi ad distinctio explicabo nesciunt culpa perferendis ratione?</p>
                            </li>
                            <li>
                              
                              <div class=" d-flex align-items-center">
                                Cliente - Avaliação: 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-half m-1" viewBox="0 0 16 16">
                                  <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                </svg>
                              </div>

                              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam voluptas recusandae maiores possimus cum harum cupiditate nisi suscipit, illum fugiat cumque sint modi ad distinctio explicabo nesciunt culpa perferendis ratione?</p>
                            </li>
                            <li>
                              
                              <div class=" d-flex align-items-center">
                                Cliente - Avaliação: 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-half m-1" viewBox="0 0 16 16">
                                  <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                </svg>
                              </div>

                              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam voluptas recusandae maiores possimus cum harum cupiditate nisi suscipit, illum fugiat cumque sint modi ad distinctio explicabo nesciunt culpa perferendis ratione?</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  
                </div>
            </form > 
        </div>
    </main>



    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
      
    </script>

</body>
</html>