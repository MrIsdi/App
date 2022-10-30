<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KMTZ - Register</title>
    <link rel="stylesheet" href={{ url("css/login.css") }}>
    <link rel="shortcut icon" href={{ url("img/logo.png") }} type="image/x-icon">
</head>
<body>

    <section class="page-register">
        <main class="box-login">
            <img src={{ url("img/logo.png") }} alt="Logo">
            <form action={{ route("storeUser") }} method="POST">
                @csrf
                <table class="input-login">
                    <thead></thead>
                    <tbody>
                        <tr>
                            <td>
                                <label for="name">Nama</label>
                            </td>
                            <td>
                                <input type="text" name="name" id="name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email</label>
                            </td>
                            <td>
                                <input type="email" name="email" id="email" pattern="[a-zA-Z0-9]+@+[a-zA-Z]+.+[a-z]{3}" required>
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
                        <tr>
                            <td>
                                <label for="password2">Konfirmasi Password</label>
                            </td>
                            <td>
                                <input type="password" name="password2" id="password2" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="button-login">
                    <button type="submit">Daftar</button>
                </div>
            </form>
            <hr width="90%" style="margin: 16px auto;">
            <a href={{ route("login") }}>Punya akun?</a>
        </main>
    </section>

</body>
</html>
