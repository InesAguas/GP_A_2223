@extends('master')

@section('header')
@include('navbar')
@endsection

@section('content')



<div class="bg-light mt-4 ">
    <div class="container pt-4">
        @if (session()->has('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session()->get('msg')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="/utilizador/editarPerfil" method="post" id="dadosPerfil" enctype="multipart/form-data">
            @csrf
            <div class="row p-3">
                <div class="col-4 ">
                    <div class="row">
                        <label for="imgPerfil" class="mb-2 text-center">
                            @if ($user->u_imagem == null)
                            <img src="https://miro.medium.com/max/1400/1*g09N-jl7JtVjVZGcd-vL2g.jpeg" id="foto" class="img-thumbnail" width="250" height="250">
                            @else
                            <img src="/img/{{$user->u_imagem}}" class="img-thumbnail" width="250" height="250" id="foto">
                            @endif
                        </label>
                        <input onchange="getBase64()" type="file" class="d-none" name="imgPerfil" id="imgPerfil">
                        <div class="col-12 mb-2"><input type="date" class="form-control" name="data_nascimento" placeholder="Nome" value="{{$user->u_data_nascimento}}"></div>
                    </div>
                </div>
                <div class="col-8 ">



                    <div class="row">
                        <div class="col-12 mb-2"><input type="text" class="form-control" name="nome" placeholder="Nome" value="{{$user->u_nome}}" required></div>
                        <div class="col-12 mb-2"><input type="email" class="form-control" name="email" placeholder="E-mail" value="{{$user->email}}" required></div>
                        <div class=" col-12 mb-2"><input type="password" class="form-control " name="password" placeholder="Password" required></div>
                        <div class=" col-12 mb-2"><input type="text" class="form-control" name="morada" placeholder="Morada" value="{{$user->u_morada}}" required></div>



                        <div class="col-12 mb-2"><input type="text" class="form-control" name="nif" placeholder="NIF" value="{{$user->u_contribuinte}}" required></div>
                        <div class="col-12 mb-2"><input type="text" class="form-control" name="telemovel" placeholder="Telemóvel" value="{{$user->u_telefone}}" required></div>
                    </div>


                </div>
            </div>
        </form>
        <div class="row p-3">


            <div class="offset-4 col-4 mb-2">
                <form method="post" action="/utilizador/apagarPerfil">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100" name="apagarConta">Apagar Conta</button>
                </form>
            </div>




            <div class="col-4 mb-2"><button type="submit" class="btn btn-success w-100" name="guardarDados" form="dadosPerfil">Guardar Dados</button></div>

        </div>
    </div>
</div>

<script>
    function getBase64() {
        var file = document.getElementById("imgPerfil").files[0];
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function() {
            document.getElementById("foto").src = reader.result;
        };
        reader.onerror = function(error) {
            console.log('Error: ', error);
        };
    }
</script>
@endsection