@extends('master')

@section('header')
@include('navbarprocura')
@endsection

@section('content')

<?php
$sum = 0;
$numRatings = 0;
$average = 0;
foreach ($comentarios as $comentario) {
    $sum += $comentario->r_avaliacao;
    $numRatings++;
}
if ($sum > 0) {
    $average = round($sum / $numRatings);
}



?>
<div class="row mt-5 ">

    <div class="card bg-light">
        <div class="card-body">

            <div class="row g-1">
                <div class="col-7 ">
                    <div class="row">
                        <div class="col m-3 p-3 bg-white">

                            <h5>Nome do produto: {{$produto->p_nome}} </h5>

                        </div>
                    </div>
                    <div class="row m-1">

                        <div class="col-7">
                            @if(isset($imagem[0]))
                            <img src="/img/produtos/{{$imagem[0]->i_nome}}" class="card-img-top" alt="{{$produto->p_nome}}" width="250">
                            @endif
                        </div>
                        <div class="col-2">
                            @for($i = 1; $i < 4; $i++) @if(isset($imagem[$i])) <img src="/img/produtos/{{$imagem[$i]->i_nome}}" class="card-img-top" alt="{{$produto->p_nome}}" width="100">
                                @endif
                                @endfor
                        </div>
                        <div class="col-2">
                            @for($i = 4; $i < 7; $i++) @if(isset($imagem[$i])) <img src="/img/produtos/{{$imagem[$i]->i_nome}}" class="card-img-top" alt="{{$produto->p_nome}}" width="100">
                                @endif
                                @endfor
                        </div>


                        <div class=" col ">
                            <div class=" row gy-3 ">
                                <div class=" col-6 ">
                                    <img src=" ./Limpador-Concentrado-Querosene-Gel-Amolim-300x300.jpg.webp" alt="" style="object-fit: contain;max-width: 100px;
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
                            <p>Categoria: {{$produto->p_categoria}}</p>
                            <p>Preço: {{$produto->p_preco}}€ /KG</p>
                            @if($produto->p_stock > 0)
                            <p>Em stock: Sim</p>
                            @else
                            <p>Em stock: Não</p>
                            @endif
                            <div class=" d-flex align-items-center">
                                Avaliação:
                                @for ($i = 0; $i < $average; $i++) <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star m-1" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    @endfor
                                    @for ($i = $average; $i < 5; $i++) <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-star m-1" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        @endfor


                            </div>
                        </div>
                    </div>
                    <div class="row p-3 m-1 d-flex align-items-center bg-white">
                        <div class="col ">
                            <form action="/adicionar-carrinho" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$produto->p_id}}">
                                <input type="submit" class="btn btn-success" value="Adicionar ao Carrinho de Compras">
                            </form>
                            @if (session()->has('alert1'))
                                <div class="alert alert-danger" id="alert-message">
                                    {{ session()->get('alert1') }}
                                </div>
                                <script>
                                    setTimeout(() => {
                                        document.getElementById("alert-message").remove();
                                    }, 3000); // 3000 milliseconds = 3 seconds
                                </script>
                            @endif
                            @if (session()->has('success1'))
                            <div class="alert alert-success" id="alert-message">
                                    {{ session()->get('success1') }}
                                </div>
                                <script>
                                    setTimeout(() => {
                                        document.getElementById("alert-message").remove();
                                    }, 3000); // 3000 milliseconds = 3 seconds
                                </script>
                            @endif
                        </div>
                        <div class="col ">
                            <form action="/adicionar-desejo" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$produto->p_id}}"><br>
                                <input type="submit" class="btn btn-success" value="Adicionar à lista de desejos">
                            </form>
                            @if (session()->has('alert2'))
                                <div class="alert alert-danger" id="alert-message">
                                    {{ session()->get('alert2') }}
                                </div>
                                <script>
                                    setTimeout(() => {
                                        document.getElementById("alert-message").remove();
                                    }, 3000); // 3000 milliseconds = 3 seconds
                                </script>
                            @endif
                            @if (session()->has('success2'))
                            <div class="alert alert-success" id="alert-message">
                                    {{ session()->get('success2') }}
                                </div>
                                <script>
                                    setTimeout(() => {
                                        document.getElementById("alert-message").remove();
                                    }, 3000); // 3000 milliseconds = 3 seconds
                                </script>
                            @endif
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
                                <p>{{$produto->p_descricao}}</p>
                            </div>
                        </div>
                        <form action="/guardar-comentarios/{{$produto->p_id}}" method="POST">
                            @csrf
                            <div class="col-12 d-flex flex-column align-items-end mt-2">

                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escreva aqui o seu comentário" name="comentario" rows="5" required></textarea>
                                <input type="number" min="0" max="5" placeholder="Escreva aqui a sua avaliação(0-5)" class="form-control" name="avaliacao" required>
                                <button type="submit" class="btn btn-secondary m-2">Adicionar</button>

                            </div>
                        </form>
                    </div>

                </div>

                <div class="col-5 p-3 bg-white scroll-container" style=" max-height: 300px;
                        overflow-y: scroll;
                        scroll-behavior: smooth;">
                    <h5>Comentários:</h5>
                    <ul>
                        @foreach($comentarios as $comentario)
                        <li>

                            <div class=" d-flex align-items-center">
                                Cliente - Avaliação:
                                @for($i = 0; $i < $comentario->r_avaliacao; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill m-1" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    @endfor
                                    @for($i = $comentario->r_avaliacao; $i < 5; $i++) <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-star m-1" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        @endfor

                            </div>

                            <p>{{$comentario->r_comentario}}</p>
                        </li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection