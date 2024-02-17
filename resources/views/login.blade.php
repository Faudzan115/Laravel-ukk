
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
        <div class="login">
            <form action="home" method="POST">
                <h1>Login</h1>
                <hr>
                <p></p>
                <label for="">username</label>
                <input type="text" clplaceholder="WebKasir15@gmail.com" name="username">
                <label for="">Password</label>
                <input type="password" placeholder="Password" name="password">
                <button>Login</button>
                <p>
                    <a href="{{'register'}}">Forgot Daftar?</a>
                </p>
            </form>
        </div>
    </body>
</html>
