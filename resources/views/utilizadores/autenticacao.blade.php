@extends('master')

@section('header')
<nav class="navbar ">
    <div class="container-fluid ">
        <a class="navbar-brand" href="{{ url('/')}}"><img src="/img/logotipo.png" width="70" height="55"></a>
    </div>
</nav>
@endsection

@section('content')
<div class="row mt-5 p-4 bg-light">
    <div class="col-6 p-4">
        <div class="card">
            <div class="card-body">
                <div class="row p-3 text-center">
                    <div class="col p-3">
                        <h2>Iniciar Sessão</h2>
                    </div>
                </div>
                <form method="POST" action="/utilizador/login">
                    @csrf
                    <div class="row p-3">
                        <div class="col">
                            <label for="email" class="form-label">Email</label><br>
                            <input type='email' name='email' class="form-control bg-light" value={{old('email')}}><br>
                            <label for="password" class="form-label">Password</label><br>
                            <input type='password' name='password' class="form-control bg-light"><br>
                        </div>
                    </div>
                    
                    <div class="row p-3 mb-3">
                        <div class="col text-center">
                            <input type='submit'  class="btn btn-secondary" name='login' value='Login'><br>
                        </div>
                    </div>
                </form>
                
            </div>
            
        </div>
        @if ($errors->any())
        <div class="row p-3 mb-3">
            <div class="col text-center">
                <div class="alert alert-warning" role="alert">
                    {{ $errors->first() }}
                </div>
            </div>
        </div>
        @endif
    </div>
    <div class="col-6 p-4">
        <div class="card">
            <div class="card-body">
                <div class="row p-3 text-center">
                    <div class="col p-3">
                        <h2>Ainda não tens conta?</h2>
                    </div>
                </div>
                <div class="row p-2 text-center">
                    <div class="col">
                        <p>Faz encomendas</p>
                        <p>Segue os teus artigos favoritos</p>
                        <p>Tira as tuas dúvidas no nosso chat</p>
                        <p>.... e muito mais</p>
                        <h3>Não percas mais tempo!</h3>
                    </div>
                </div>
            </div>
            <div class="row p-3 mb-3">
                <div class="col text-center">
                    <a href="{{ url('/utilizador/registo')}}" ><button type="button"  class="btn btn-secondary">Regista-te</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

