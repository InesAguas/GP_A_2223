@extends('master')

@section('content')

<div class="container2">
    <h2>Registar</h2>
    <form method="POST" action="/registar">
        @csrf
        <label for="nome">Nome de utilizador:</label><br>
        <input type='text' name='nome' value={{old('nome')}}><br>
        <label for="morada">Morada:</label><br>
        <input type='text' name='morada' value={{old('morada')}}><br>
        <label for="email">Email:</label><br>
        <input type='email' name='email' value={{old('email')}}><br>
        <label for="contribuinte">Nº contribuinte:</label><br>
        <input type='number' name='contribuinte' value={{old('contribuinte')}}><br>
        <label for="password">Password:</label><br>
        <input type='password' name='password'><br>
        <label for="contacto">Nº contacto:</label><br>
        <input type='number' name='contacto' value={{old('contacto')}}><br>
        <label for="confirm_password">Re-enter password:</label><br>
        <input type='password' name='confirm_password'><br>
        <label for="data_nascimento">Data de nascimento:</label><br>
        <input type='date' name='data_nascimento' value={{old('data_nascimento')}}><br>
        <input type='submit' value='Confirmar'><br>
    </form>

    @if ($errors->any())
        <div class="">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
</div>

@endsection