<html>

<head>
    <title>SMKN 1 MARTAPURA</title>
    <link rel="shortcut icon" href="/SMEKMA.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        .content {
            flex: 1;
            adad
        }

        footer {
            background-color: #000000;
            color: #FFFFFF;
            padding: 20px;
            margin: 0;
        }

        .navbar {
            padding: 15px;
            background-color: #000000;


        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown button {
            background-color: black;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: black;
            min-width: 210px;
            min-height: 135px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-peminjaman {
            display: none;
            position: absolute;
            background-color: black;
            min-width: 115px;
            min-height: 185px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-peminjaman a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-content,
        .dropdown:hover .dropdown-peminjaman {
            display: block;
        }

        .navbar-brand b {
            color: #0D6EFD;
        }

        .test {
            color: #ffffff !important;
            background-color: #000000;
        }

        .test:hover {
            color: #0D6EFD !important;
        }

        .nav-item .dropdown .nav-link {
            color: #ffffff;
        }

        .navbar-nav .nav-item {
            margin-right: 20px;
        }

        .navbar-nav .nav-item:last-child {
            margin-right: 0;
        }

        @keyframes blink {
            0% {
                opacity: 0;
            }

            10% {
                opacity: 0;
            }

            90% {
                opacity: 1;
            }

            100% {
                opacity: 1;
            }
        }

        .blink {
            animation: blink 0.5s ease-in-out;
        }

        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            visibility: hidden;
        }

        .popup-content {
            background: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .popup-content a {
            color: red;
        }
    </style>
    <script>
        function checkLogin() {
            var isLoggedIn = false; // Replace with actual login check
            if (!isLoggedIn) {
                showPopup();
            }
        }

        function showPopup() {
            document.getElementById('loginPopup').style.visibility = 'visible';
        }

        function closePopup() {
            document.getElementById('loginPopup').style.visibility = 'hidden';
        }
    </script>
</head>

<body id="page-top" class="index bg-light">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-default fixed-top" id="mainNav"
        style="color:#0D6EFD;background-color:#000000;padding: 15px;">
        <div class="container-fluid justify-content-center">
            <img src="/SMEKMA.png" height="40px" weight="40px" />
            &nbsp; &nbsp;
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <b style="color:#0D6EFD;">SMKN1MTP</b>
            </a>
            <div class="collapse navbar-collapse text-center flex-grow-0" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto hidden" id="ulNavfake">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger">&nbsp;</a>
                    </li>
                </ul>
                <ul class="blink navbar-nav text-uppercase ml-auto" id="ulNavbar">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" id="home-nav" href="/"
                            style="color:#0D6EFD;background-color:#000000">
                            <b>Beranda</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link js-scroll-trigger" id="jadwal-nav" href="#"
                                style="color:#ffffff;background-color:#000000">
                                <b>Jadwal Peminjaman</b>
                                <div class="dropdown-content">
                                    <a href="Jadwal-Peminjaman/lab" class="test">
                                        <b>LAB JURUSAN</b></a>
                                    <a href="Jadwal-Peminjaman/aula" class="test">
                                        <b>AULA</b></a>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link test js-scroll-trigger" id="peminjaman-nav" href="#" onclick="checkLogin()"
                                style="color:#ffffff;background-color:#000000">
                                <b>Peminjaman</b>
                                <div class="dropdown-peminjaman">
                                    <a href="status" onclick="checkLogin()" class="test">
                                        <b>STATUS PEMINJAMAN</b></a>
                                    <a href="ajukan" onclick="checkLogin()" class="test">
                                        <b>AJUKAN PEMINJAMAN</b></a>
                                </div>
                            </a>
                        </div>
                        <div class="popup" id="loginPopup">
                            <div class="popup-content">
                                <p><strong>Peringatan!</strong></p>
                                <p>Anda harus <a href="/login">login</a> agar bisa mengakses halaman ini!</p>
                                <button onclick="closePopup()">OK</button>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link test js-scroll-trigger" id="prasarana-nav" href="pra"
                            style="color:#ffffff;background-color:#000000">
                            <b>Prasarana</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link test js-scroll-trigger" name="login-nav" href="jur"
                                style="color:#ffffff;background-color:#000000">
                                <b>Jurusan</b>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div>
                            <a class="nav-link test js-scroll-trigger" id="regist-nav" href="log"
                                style="color:#ffffff;background-color:#000000">
                                <b>Login</b>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br />

    <section class="bg-light page-section content" style="padding: 15px 0 0 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="block wow fadeInUp" data-wow-delay=".3s">
                        <h2 data-aos="fade-up" data-aos-duration="500" class="wow fadeInUp animated cd-headline slide"
                            data-wow-delay=".4s" style="
                                text-transform: uppercase;
                                font-size: 30px;
                                margin-top: 80px;
                                padding-bottom: 0px;">
                            <b>Selamat datang di Portal<br />Layanan dan Informasi<br />SMK NEGERI 1
                                MARTAPURA</b>
                        </h2>
                        <div id="foto" value="0" hidden="">
                            <img src="assets/images/alurfix.jpg" class="square" />
                        </div>
                        <h2 style="padding-bottom: 100px" id="break"></h2>
                        <br />
                        <h4 data-aos="fade-up" data-aos-duration="500" class="wow fadeInUp animated"
                            data-wow-delay=".6s" style="font-style: normal; text-transform: none">
                            Portal Layanan Sarana dan Informasi merupakan aplikasi berbasis web yang digunakan untuk
                            mengajukan
                            peminjaman Aula di SMK NEGERI 1 MARTAPURA.
                        </h4>
                        <br />
                        <br>
                        <br>
                        <br>

                        <h2 class="blink">
                            <a class="btn btn-primary" onclick="fotoShow()"><b>Alur Proses Peminjaman</b></a>
                        </h2>
                        <br />
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col-xs-12">
                    SMKN 1 MARTAPURA ©
                    <a href="https://www.instagram.com/smkn1martapura" target="_blank"
                        style="color:#0D6EFD; text-decoration:none;">
                        Tentang SMK
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>