@extends('master')

@section('content')

<div class="container2">
    <h2>Registar</h2>
    <form method="POST" action="/registar">
        @csrf
        <label for="nome">Nome de utilizador:</label><br>
        <input type='text' name='nome'><br>
        <label for="morada">Morada:</label><br>
        <input type='text' name='morada'><br>
        <label for="email">Email:</label><br>
        <input type='email' name='email'><br>
        <label for="contribuinte">Nº contribuinte:</label><br>
        <input type='number' name='contribuinte'><br>
        <label for="password">Password:</label><br>
        <input type='password' name='password'><br>
        <label for="contacto">Nº contacto:</label><br>
        <input type='number' name='contacto'><br>
        <label for="confirm_password">Re-enter password:</label><br>
        <input type='password' name='confirm_password'><br>
        <label for="data_nascimento">Data de nascimento:</label><br>
        <input type='date' name='data_nascimento'><br>
        <input type='submit' value='Confirmar'><br>
    </form>
</div>

@endsection