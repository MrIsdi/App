<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KMTZ - Login</title>
    <link rel="stylesheet" href={{ url("css/login.css") }}>
    <link rel="shortcut icon" href={{ url("img/logo.png") }} type="image/x-icon">
</head>
<body>

    <section class="page-login">
        <main class="box-login">
            <img src={{ url("img/logo.png") }} alt="Logo">
            <form action={{ route("loginUser") }} method="POST">
                @csrf
                <table class="input-login">
                    <thead></thead>
                    <tbody>
                        <tr>
                            <td>
                                <label for="email">Email</label>
                            </td>
                            <td>
                                <input type="email" name="email" id="email" pattern="[a-zA-Z0-9]+@+[a-zA-Z]+.+[a-z]{3}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Password</label>
                            </td>
                            <td>
                                <input type="password" name="password" id="password" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="button-login">
                    <button type="submit">Login</button>
                </div>
            </form>
            <hr width="90%" style="margin: 16px auto;">
            <a href={{ route("register") }}>Belum punya akun?</a>
        </main>
    </section>

</body>
</html>
