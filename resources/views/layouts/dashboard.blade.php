<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ url("css/sidebar.css") }}>
    <link rel="shortcut icon" href={{ url("img/logo.png") }} type="image/x-icon">
    @yield("style")
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="sidebar">
        <div class="header">
            <div class="img">
                @if (!Auth::user()->foto)
                <img src={{ url("img/logo.png") }} alt="">
                @else
                <img src={{ url("img/".Auth::user()->foto) }} alt="">
                @endif
            </div>
            <span id="close">
                <i class="bx bx-x"></i>
            </span>
        </div>
        <hr>
        @if (Auth::user()->role == "admin")
        <div class="body">
            <ul>
                <li>
                    <a href={{ route("dashboard-admin") }}>
                        <i class='bx bx-grid-alt'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href={{ route("event-admin") }}>
                        <i class='bx bx-calendar'></i>
                        <span>Events</span>
                    </a>
                </li>
            </ul>
        </div>
        @else
        <div class="body">
            <ul>
                <li>
                    <a href={{ route("dashboard-user") }}>
                        <i class='bx bx-grid-alt'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href={{ route("profile-user") }}>
                        <i class='bx bxs-user-badge'></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href={{ route("event-user") }}>
                        <i class='bx bx-calendar'></i>
                        <span>Events</span>
                    </a>
                </li>
            </ul>
        </div>
        @endif
        <div class="footer">
            <ul>
                <li>
                    <form action={{ route("logout") }} method="POST">
                        @csrf
                        <button type="submit"
                        style=" background: none;
                                border: none;
                                font-size: 16px;
                                ">
                            <i class='bx bx-chevron-right-square'></i>
                            <span>Logout</span>
                        <button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <section class="content">
        <nav class="nav">
            <button>
                <i class="bx bx-menu"></i>
            </button>
            <div class="user">
                <div class="img-user">
                    @if (!Auth::user()->foto)
                    <img src={{ url("img/logo.png") }} alt="">
                    @else
                    <img src={{ url("img/".Auth::user()->foto) }} alt="">
                    @endif
                </div>
                <p>{{ Auth::user()->name }}</p>
            </div>
        </nav>
        <main class="main">
            @yield("content")
        </main>
    </section>

    <script src={{ url("js/sidebar.js") }}></script>
</body>
</html>
