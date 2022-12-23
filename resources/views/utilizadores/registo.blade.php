@extends('master')

@section('header')
<nav class="navbar ">
    <div class="container-fluid ">
        <a class="navbar-brand" href="{{ url('/')}}"><img src="/img/logotipo.png" width="70" height="55"></a>
    </div>
</nav>
@endsection

@section('content')

    <div class="row mt-5 mb-5 ">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col p-3">
                            <h2>Registar</h2>
                        </div>
                    </div>
                    <form method="POST" action="/utilizador/registar">
                        @csrf
                        <div class="row p-3">
                            <div class="col-6">
                                <label for="nome" class="form-label">Nome de utilizador:</label><br>
                                <input type='text' class="form-control mb-3 bg-light" name='nome' value='{{old("nome")}}'><br>
                                <label for="email" class="form-label">Email:</label><br>
                                <input type='email' class="form-control mb-3 bg-light" name='email' value='{{old("email")}}'><br>
                                
                                <label for="password" class="form-label">Password:</label><br>
                                <input type='password' class="form-control mb-3 bg-light" name='password'><br>
                                <label for="password_confirmation" class="form-label">Re-enter password:</label><br>
                                <input type='password' class="form-control mb-3 bg-light" name='password_confirmation'><br>
                            </div>
                            <div class="col-6">
                                <label for="morada" class="form-label">Morada:</label><br>
                                <input type='text' class="form-control mb-3 bg-light" name='morada' value='{{old("morada")}}'><br>
                                <label for="contribuinte" class="form-label">Nº contribuinte:</label><br>
                                <input type='number' class="form-control mb-3 bg-light" name='contribuinte' value='{{old("contribuinte")}}'><br>
                                
                                <label for="contacto" class="form-label">Nº contacto:</label><br>
                                <input type='number' class="form-control mb-3 bg-light" name='contacto' value='{{old("contacto")}}'><br>
                                
                                <label for="data_nascimento" class="form-label">Data de nascimento:</label><br>
                                <input type='date' class="form-control mb-3 bg-light" name='data_nascimento' value='{{old("data_nascimento")}}'><br>
                            </div>
                        </div>
                        <div class="row p-3 mb-3">
                            <div class="col text-center">
                                <input type='submit' class="btn btn-secondary" value='Confirmar'><br>
                            </div>
                        </div>
                    </form>
                    @if ($errors->any())
                    <div class="row p-3 mb-3">
                        <div class="col text-center">
                            <div class="alert alert-warning" role="alert">
                                {{ $errors->first() }}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(session('sucesso') != null)
                    <div class="row p-3 mb-3">
                        <div class="col text-center">
                            <div class="alert alert-success" role="alert">
                                {{session('sucesso')}}
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col ">
                       Já tem conta? Faça o <a href="{{ url('/utilizador/login') }}">Login</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection