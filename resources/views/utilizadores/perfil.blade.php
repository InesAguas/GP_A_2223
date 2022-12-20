@extends('master')

@section('header')
@include('navbar')
@endsection

@section('content')


<div class="bg-light mt-4 ">
    <div class="container ">
        <div class="row p-3">
            <div class="col-4 ">
                <div class="row">
                    <label for="imgPerfil" class="mb-2 text-center">
                        @if ($user->u_imagem == null)
                        <img src="https://miro.medium.com/max/1400/1*g09N-jl7JtVjVZGcd-vL2g.jpeg" class="img-thumbnail" width="250" height="250">
                        @else
                        <img src="{{$user->u_imagem}}" class="img-thumbnail" width="250" height="250">
                        @endif
                    </label>
                    <input type="file" class="d-none" id="imgPerfil">
                    <div class="col-12 mb-2"><input type="date" class="form-control" placeholder="Nome" value="{{$user->u_data_nascimento}}"></div>
                </div>
            </div>
            <div class="col-8 ">
                <div class="row">
                    <div class="col-12 mb-2"><input type="text" class="form-control" placeholder="Nome" value="{{$user->u_nome}}"></div>
                    <div class="col-12 mb-2"><input type="email" class="form-control" placeholder="E-mail" value="{{$user->email}}"></div>
                    <div class=" col-12 mb-2"><input type="password" class="form-control " placeholder="Password"></div>
                    <div class=" col-12 mb-2"><input type="text" class="form-control" placeholder="Morada" value="{{$user->u_morada}}"></div>

                    <div class=" col-7 mb-2"><input type="text" class="form-control" placeholder="Código"></div>
                    <div class="col-1 mb-2">
                        <h3>-</h3>
                    </div>
                    <div class="col-4 mb-2"><input type="text" class="form-control" placeholder="Postal"></div>

                    <div class="col-12 mb-2"><input type="text" class="form-control" placeholder="NIF" value="{{$user->u_contribuinte}}"></div>
                    <div class=" col-12 mb-2"><input type="text" class="form-control" placeholder="Telemóvel" value="{{$user->u_telefone}}"></div>

                    <div class="col-6 mb-2"><button>Apagar Conta</button></div>
                    <div class="col-6 mb-2"><button>Guardar Dados</button></div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection