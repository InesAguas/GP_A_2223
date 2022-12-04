<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="POST" action="/login">
        @csrf
                <label for="email">Email</label><br>
                <input type='email' name='email' placeholder='Email'><br>
                <label for="password">Password</label><br>
                <input type='password' name='password' placeholder='Password'><br>
                <input type='submit' class='button' name='submit_login' value='Login'><br>
        </form>
    </body>
</html>