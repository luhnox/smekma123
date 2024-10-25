<html>

<head>
    <title>SMKN 1 MARTAPURA</title>
    <link rel="shortcut icon" href="/SMEKMA.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        .content {
            flex: 1;
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

        .entryarea {
            position: relative;
            height: 50px;
            line-height: 30px;
        }

        input {
            position: absolute;
            width: 100%;
            outline: none;
            padding: -20px 0;
            border-bottom-color: black;
            border: none;
            border-bottom: 1px solid black;
            border-radius: 4px 4px 0 0;
            background: transparent;
            transition: 0.1s ease;
            z-index: 5555;
            font-weight: bold;
        }

        .labelline {
            position: absolute;
            font-size: 0.9em;
            color: grey;
            padding: 0 6px;
            background-color: #ffffff;
            transition: 0.5s ease;
            border: none;
            background: transparent;
        }

        input:focus {
            border-bottom-color: black;
            border: none;
            border-radius: 4px 4px 0 0;
            border-bottom: 2px solid black;
        }

        input:focus+.labelline {
            height: 30px;
            line-height: 30px;
            background: transparent;
            transform: translate(-9px, -25px) scale(0.88);
            z-index: 1;
            font-size: 0.8em;

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

        .regis {
            text-decoration: none;
        }

        .regis:hover {
            text-decoration: underline;
        }

        .coba {
            width: 390px;
        }

        .coba1 {
            width: 410px;
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
            animation: blink 0.75s ease-in-out;
        }

        @keyframes blink1 {
            0% {
                opacity: 0;
            }

            25% {
                opacity: 0;
            }

            75% {
                opacity: 1;
            }

            100% {
                opacity: 1;
            }
        }

        .blink1 {
            animation: blink 0.1s ease-in-out;
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
                <ul class="blink1 navbar-nav text-uppercase ml-auto" id="ulNavbar">
                    <li class="nav-item">
                        <a class="nav-link test js-scroll-trigger" id="home-nav" href="/"
                            style="color:#ffffff;background-color:#000000">
                            <b>Beranda</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link test js-scroll-trigger" id="jadwal-nav" href="jad"
                                style="color:#ffffff;background-color:#000000">
                                <b>Jadwal Peminjaman</b>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link test js-scroll-trigger" id="peminjaman-nav" href="#"
                                onclick="checkLogin()" style="color:#ffffff;background-color:#000000">
                                <b>Peminjaman</b>
                                <div class="dropdown-peminjaman">
                                    <a href="lab" class="test">
                                        <b>STATUS PEMINJAMAN</b></a>
                                    <a href="aula" class="test">
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
                            <a class="nav-link js-scroll-trigger" name="login-nav" href="#"
                                style="color:#0D6EFD;background-color:#000000">
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

    <section class=" bg-light page-section content" style="padding: 100px 170px 0 170px">
        <div class="blink container" id="mainDiv">

            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase"><b>Daftar Jurusan Di SMKN 1 Martapura</b></h2>
                <br>
            </div>
            <!-- Baris 1: Tiga Gambar -->
            <div class="row">
                <div class="col-md-4 portfolio-item">
                    <a class="portfolio-link" href="#ModalDetail" onclick="detail(20)">
                        <img class="img-fluid" src="https://sisarpras.ulm.ac.id/upload/sarana/4MJ3QF.jpg" alt="">
                        <div class="portfolio-caption">
                            <h4 style="color:#333">Teknik Jaringan Komputer dan Telekomunikasi</h4>
                            <p class="text-muted">Reguler</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 portfolio-item">
                    <a class="portfolio-link" href="#ModalDetail" onclick="detail(21)">
                        <img class="img-fluid" src="https://sisarpras.ulm.ac.id/upload/sarana/KANVTH.jpg" alt="">
                        <div class="portfolio-caption">
                            <h4 style="color:#333">Teknik Jaringan Komputer dan Telekomunikasi</h4>
                            <p class="text-muted">Samsung</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 portfolio-item">
                    <a class="portfolio-link" href="#ModalDetail" onclick="detail(22)">
                        <img class="img-fluid" src="https://sisarpras.ulm.ac.id/upload/sarana/7U3WVF.jpg" alt="">
                        <div class="portfolio-caption">
                            <h4 style="color:#333">Desain Komunikasi Visual</h4>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Baris 2: Tiga Gambar -->
            <div class="row">
                <div class="col-md-4 portfolio-item">
                    <a class="portfolio-link" href="#ModalDetail" onclick="detail(23)">
                        <img class="img-fluid" src="https://sisarpras.ulm.ac.id/upload/sarana/DAEQOK.jpg" alt="">
                        <div class="portfolio-caption">
                            <h4 style="color:#333">Tata Busana</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 portfolio-item">
                    <a class="portfolio-link" href="#ModalDetail" onclick="detail(24)">
                        <img class="img-fluid" src="https://sisarpras.ulm.ac.id/upload/sarana/6YXW0V.jpg" alt="">
                        <div class="portfolio-caption">
                            <h4 style="color:#333">Teknik Farmasi</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 portfolio-item">
                    <a class="portfolio-link" href="#ModalDetail" onclick="detail(25)">
                        <img class="img-fluid" src="https://sisarpras.ulm.ac.id/upload/sarana/1VERPM.jpg" alt="">
                        <div class="portfolio-caption">
                            <h4 style="color:#333">Manajemen Perkantoran dan Layanan Bisnis</h4>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Baris 3: Tiga Gambar -->
            <div class="row">
                <div class="col-md-4 portfolio-item">
                    <a class="portfolio-link" href="#ModalDetail" onclick="detail(26)">
                        <img class="img-fluid" src="https://sisarpras.ulm.ac.id/upload/sarana/U37DGM.jpg" alt="">
                        <div class="portfolio-caption">
                            <h4 style="color:#333">Pemasaran</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 portfolio-item">
                    <a class="portfolio-link" href="#ModalDetail" onclick="detail(27)">
                        <img class="img-fluid" src="https://sisarpras.ulm.ac.id/upload/sarana/9TK10J.jpg" alt="">
                        <div class="portfolio-caption">
                            <h4 style="color:#333">Kuliner</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 portfolio-item">
                    <a class="portfolio-link" href="#ModalDetail" onclick="detail(28)">
                        <img class="img-fluid" src="https://sisarpras.ulm.ac.id/upload/sarana/J0SROM.jpg" alt="">
                        <div class="portfolio-caption">
                            <h4 style="color:#333">Akuntansi dan Keuangan Lembaga</h4>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Baris 4: Satu Gambar Tengah -->
            <div class="mb-5 row justify-content-center">
                <div class="col-md-4 portfolio-item">
                    <a class="portfolio-link" href="#ModalDetail" onclick="detail(29)">
                        <img class="img-fluid" src="https://sisarpras.ulm.ac.id/upload/sarana/9FGXZL.jpg" alt="">
                        <div class="portfolio-caption">
                            <h4 style="color:#333">Kecantikan dan Spa</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>




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
</body>

</html>