<!doctype html>
<html lang="en">

<head>
    <title>KMT Zenerics</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href={{ url("css/landingpage.css") }}>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href={{ url("img/logo.png") }} type="image/x-icon">

</head>

<body>
    <header class="position-fixed top-0 w-100" style="z-index: 99;">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 lp-theme-glass">
            <a class="navbar-brand" href="#">
                <img src={{ url("img/logo.png") }} alt="logo"class="lp-img">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <i class='bx bx-menu fs-1'></i>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0"></ul>
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link text-dark" href="#home">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-dark" href="#about">About Us</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-dark" href="#structure">Structure</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-dark" href="#expertise">Expertise</a>
                    </li>
                </ul>
                <div class="d-flex my-2 my-lg-0">
                    <a href={{ route("login") }} class="btn lp-btn btn-outline-dark mx-2">Sign In</a>
                    <a href={{ route("register") }} class="btn lp-btn btn-dark mx-2">Sign Up</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="position-relative" style="z-index: 1;">
        <section class="lp-home lp-h-max d-flex justify-content-center align-items-center" id="home">
            <div class="container-lg">
                <div class="row justify-content-evenly lp-theme-glass p-5">
                    <div class="col-md-5 d-flex justify-content-center mb-3" data-aos="fade-right">
                        <img src="img/home.svg" alt="home" class="img-fluid w-50 m-auto">
                    </div>
                    <div class="col-md-5 d-flex justify-content-center align-items-center" data-aos="fade-left">
                        <p class="h3">Selamat Datang di BBMK KMT Zenerics</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="lp-about lp-h-max d-flex justify-content-center align-items-center" id="about">
            <div class="container-lg">
                <div class="row lp-theme-glass p-5">
                    <p class="h3 text-center fw-bold mb-3" data-aos="fade-down">About Us</p>
                    <div class="row justify-content-evenly">
                        <div class="col-md-5 d-flex justify-content-center mb-3" data-aos="fade-right">
                            <img src="img/about.svg" alt="about" class="img-fluid w-50 m-auto">
                        </div>
                        <div class="col-md-5" data-aos="fade-left">
                            <p class="fs-6" style="text-align: justify;">
                                KMT Zenerics merupakan Unit Kegiatan Mahasiswa Fakultas Matematika dan Ilmu Pengetahuan Alam yang bergerak di bidang Informasi Teknologi. KMT Zenerics memiliki visi untuk mewujudkan kampus Matematika dan Ilmu Pengetahuan Universitas Andalas yang berwawasan teknologi yang handal di bidangnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lp-home py-5 d-flex justify-content-center align-items-center" id="structure">
            <div class="container-lg">
                <div class="row lp-theme-glass p-5">
                    <p class="h3 text-center fw-bold mb-3" data-aos="zoom-in-down">Organizational Structure</p>
                    <div class="row justify-content-evenly">
                        <div class="col-md-5 d-flex justify-content-center mb-3" data-aos="zoom-in-right">
                            <img src="img/structur.svg" alt="about" class="img-fluid w-50 m-auto">
                        </div>
                        <div class="col-md-5 lp-theme-glass" data-aos="zoom-in-left">
                            <div class="accordion accordion-flush" id="accordionFlushExample" style="--bs-accordion-bg: transparent;">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Pembina KMT Zenerics
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Pembina KMT Zenerics: <strong>Drs. Wildian, M. Si</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Ketua Umum KMT Zenerics
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Ketua Umum KMT Zenerics: <strong>Luthfi Akhdan Mufa</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Sekretaris Umum KMT Zenerics
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Sekretaris Umum KMT Zenerics: <strong>Delvira Syafna</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Bendahara Umum KMT Zenerics
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Bendahara Umum KMT Zenerics: <strong>Rihadatul Aisy Syoyani Nasution</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        Departemen Pengembangan Mutu Kualitas Anggota
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Koordinator: <strong>Fidhia Hanisti</strong></p>
                                            <p>Anggota:</p>
                                            <ol start="1">
                                                <li>Muhammad Cery Fajrillah</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        Departemen Informasi dan Jaringan
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Departemen Informasi dan Jaringan: <strong>Larasati</strong></p>
                                            <p>Anggota:</p>
                                            <ol start="1">
                                                <li>Melda Hayati</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                            Departemen Elektronika, Robotik dan Komputer
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Departemen Elektronika, Robotik dan Komputer: <strong>Muhammad Ridho Isdi</strong></p>
                                            <p>Anggota:</p>
                                            <ol start="1">
                                                <li>Mohd. Alif Apranata</li>
                                                <li>Riffan Sudira</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lp-about py-5 d-flex justify-content-center align-items-center" id="expertise">
            <div class="container-lg">
                <div class="row lp-theme-glass p-5">
                    <p class="h3 text-center fw-bold mb-3" data-aos="fade-down">Expertise</p>
                    <div class="row justify-content-evenly mb-5">
                        <p class="h4 fw-bold" data-aos="fade-right">Komputer</p>
                        <hr>
                        <div class="d-flex justify-content-evenly lp-group-card">
                            <div class="lp-card lp-theme-glass p-3" data-aos="zoom-out">
                                <div class="lp-icon display-3">
                                    <i class='bx bxs-palette lp-color-1'></i>
                                    <i class='bx bxs-brush lp-color-3'></i>
                                </div>
                                <p class="fw-bold">Multimedia dan Desain</p>
                            </div>
                            <div class="lp-card lp-theme-glass p-3" data-aos="zoom-out">
                                <div class="lp-icon display-3">
                                    <i class='bx bxl-php lp-color-1'></i>
                                    <i class='bx bxl-python lp-color-3'></i>
                                </div>
                                <p class="fw-bold">Programming</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-evenly">
                        <p class="h4 fw-bold" data-aos="fade-right">Robotik</p>
                        <hr>
                        <div class="d-flex justify-content-evenly lp-group-card">
                            <div class="lp-card lp-theme-glass p-3" data-aos="zoom-out">
                                <div class="lp-icon display-3">
                                    <i class='bx bxs-bolt lp-color-1'></i>
                                    <i class='bx bxs-battery-charging lp-color-3'></i>
                                </div>
                                <p class="fw-bold">Elektronika</p>
                            </div>
                            <div class="lp-card lp-theme-glass p-3" data-aos="zoom-out">
                                <div class="lp-icon display-3">
                                    <i class='bx bxs-chip lp-color-1'></i>
                                    <i class='bx bx-bot lp-color-3'></i>
                                </div>
                                <p class="fw-bold">Mikrokontroller</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="lp-home">
        <div class="container-lg">
            <div class="row lp-theme-glass p-5 position-relative">
                <div class="col">
                    <div class="lp-media">
                        <i class='bx bxl-gmail'></i>
                        <span>kmtzenericsfmipaua@gmail.com</span>
                    </div>
                    <div class="lp-media">
                        <i class='bx bxl-facebook-square'></i>
                        <span>KMT Zenerics</span>
                    </div>
                    <div class="lp-media">
                        <i class='bx bxl-instagram-alt'></i>
                        <span>kmtzenerics_fmipaunand</span>
                    </div>
                    <div class="lp-media">
                        <i class='bx bxl-youtube' ></i>
                        <span>KMT Zenerics</span>
                    </div>
                </div>
                <div class="col-5 d-flex justify-content-center">
                    <img src="img/social.svg" alt="sosial" class="img-fluid w-50">
                </div>
                <span class="position-absolute start-50 translate-middle text-center" style="font-size: 12px; top: 90%;">
                    &copy; 2022 Departemen Elektronika, Robotika dan Komputer
                </span>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>
</body>

</html>
