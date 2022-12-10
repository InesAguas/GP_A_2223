<div class="container2">
    <div class="container3">
        <h2>Regista-te</h2>
        <form method="POST" action="/login">
            @csrf
            <label for="Name">Nome de utilizador</label><br>
            <input type='text' name='nome_utilizador' placeholder='Seu nome'><br>
            <label for="password">Password</label><br>
            <input type='password' name='password' placeholder='Password'><br>
            <label for="password">confirm Password</label><br>
            <input type='confirm_password' name='confirm_password' placeholder='Password'><br>
            <label for="email">Email</label><br>
            <input type='email' name='email' placeholder='Email'><br>
            <label for="Morada">Morada</label><br>
            <input type='text' name='Morada_utilizador' placeholder='Sua Morada'><br>
            <label for="nif">Nºcontrbuinte</label><br>
            <input type='namber' name='nif_utilizador' placeholder='seu contrbuinte'><br>
            <label for="n_contacto">Nº contacto</label><br>
            <input type='namber' name='tel_utilizador' placeholder='seu contacto'><br>
            <label for="data_nescimento">Data de nescimento</label><br>
            <input type='date' name='data_nescimento' placeholder='sua data de nescimento'><br>
            <input type='submit' class='button' name='Confirmar_register' value='Confirmar'><br>
        </form>
    </div>