@extends('master')

@section('content')
<div class="container2">
    <div class="container3">
        <h2>Iniciar Sessão</h2>
        <form method="POST" action="/login">
            @csrf
            <label for="email">Email</label><br>
            <input type='email' name='email' placeholder='Email'><br>
            <label for="password">Password</label><br>
            <input type='password' name='password' placeholder='Password'><br>
            <input type='submit' class='button' name='submit_login' value='Login'><br>
        </form>
    </div>
    <div class="container3">
        <h2>Ainda não tens conta?</h2>
        <ul>
            <li>Faz encomendas</li>
            <li>Segue os teus artigos favoritos</li>
            <li>Tira as tuas dúvidas no nosso chat</li>
            <p>.... e muito mais</p>
        </ul>
        <h3>Não percas mais tempo!</h3>
        <a href="{{ url('/')}}" ><button type="button">Regista-te</button></a>
    </div>
</div>
@endsection

        