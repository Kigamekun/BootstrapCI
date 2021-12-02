<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css"
        integrity="sha512-NXUhxhkDgZYOMjaIgd89zF2w51Mub53Ru3zCNp5LTlEzMbNNAjTjDbpURYGS5Mop2cU4b7re1nOIucsVlrx9fA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Kiga Web | Fullstack Dev Web</title>
</head>

<body>

    <style>
        body {

            /* overflow-y: hidden; */
        }

        ul {
            margin: 0px;
            padding: 0px;
        }

        .footer-section {
            background: #151414;
            position: relative;
        }

        .footer-kiga {
            border-bottom: 1px solid #373636;
        }

        .single-kiga i {
            color: #ff5e14;
            font-size: 30px;
            float: left;
            margin-top: 8px;
        }

        .kiga-text {
            padding-left: 15px;
            display: inline-block;
        }

        .kiga-text h4 {
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .kiga-text span {
            color: #757575;
            font-size: 15px;
        }

        .footer-content {
            position: relative;
            z-index: 2;
        }

        .footer-pattern img {
            position: absolute;
            top: 0;
            left: 0;
            height: 330px;
            background-size: cover;
            background-position: 100% 100%;
        }

        .footer-logo {
            margin-bottom: 30px;
        }

        .footer-logo img {
            max-width: 200px;
        }

        .footer-text p {
            margin-bottom: 14px;
            font-size: 14px;
            color: #7e7e7e;
            line-height: 28px;
        }

        .footer-social-icon span {
            color: #fff;
            display: block;
            font-size: 20px;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 20px;
        }

        .footer-social-icon a {
            color: #fff;
            font-size: 16px;
            margin-right: 15px;
        }

        .footer-social-icon i {
            height: 40px;
            width: 40px;
            text-align: center;
            line-height: 38px;
            border-radius: 50%;
        }

        .facebook-bg {
            background: #3B5998;
        }

        .twitter-bg {
            background: #55ACEE;
        }

        .google-bg {
            background: #DD4B39;
        }

        .footer-widget-heading h3 {
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 40px;
            position: relative;
        }

        .footer-widget-heading h3::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -15px;
            height: 2px;
            width: 50px;
            background: #ff5e14;
        }

        .footer-widget ul li {
            display: inline-block;
            float: left;
            width: 50%;
            margin-bottom: 12px;
        }

        .footer-widget ul li a:hover {
            color: #ff5e14;
        }

        .footer-widget ul li a {
            color: #878787;
            text-transform: capitalize;
        }

        .subscribe-form {
            position: relative;
            overflow: hidden;
        }

        .subscribe-form input {
            width: 100%;
            padding: 14px 28px;
            background: #2E2E2E;
            border: 1px solid #2E2E2E;
            color: #fff;
        }

        .subscribe-form button {
            position: absolute;
            right: 0;
            background: #ff5e14;
            padding: 13px 20px;
            border: 1px solid #ff5e14;
            top: 0;
        }

        .subscribe-form button i {
            color: #fff;
            font-size: 22px;
            transform: rotate(-6deg);
        }

        .copyright-area {
            background: #202020;
            padding: 25px 0;
        }

        .copyright-text p {
            margin: 0;
            font-size: 14px;
            color: #878787;
        }

        .copyright-text p a {
            color: #ff5e14;
        }

        .footer-menu li {
            display: inline-block;
            margin-left: 20px;
        }

        .footer-menu li:hover a {
            color: #7a6e69;
        }

        .footer-menu li a {
            font-size: 14px;
            color: #878787;

        }

        #button {
            display: inline-block;
            background-color: #ff5e14;
            width: 50px;
            height: 50px;
            text-align: center;
            border-radius: 4px;
            position: fixed;
            bottom: 30px;
            right: 30px;
            transition: background-color .3s,
             
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
        }

        #button:hover {
            cursor: pointer;
            background-color: #333;
        }

        #button:active {
            background-color: #555;
        }

        #button.show {
            opacity: 1;
            visibility: visible;
        }

  

        .tally {
            width: 10em;
            height: 10em;
        }

        .tally__line,
        .tally__path {
            stroke: currentColor;
        }

        .preloader {
            width: 100%;
            height: 100vh;
            background: #212529;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <!-- <div class="preloader">
                <h1 style="color: white;text-shadow: 2px 2px 2px #ff5e14;">KIGA</h1>

        </div> -->


    <a href="#top" style=" text-decoration: none; 
    font-weight: bold;" id="button">
        <h6 style="text-align: center;
        vertical-align: middle;
        line-height: 50px; "><b>Go !</b></h6>
    </a>


    <header id="top" class="p-3 navbar-dark bg-dark" style="color: white;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#about" class="nav-link px-2 text-white link-secondary">About Me !</a></li>
                    <li><a href="#gallery" class="nav-link px-2 text-white link-dark">Gallery</a></li>
                    <li><a href="#location" class="nav-link px-2 text-white link-dark">Location</a></li>
                    <li><a href="#contact" class="nav-link px-2 text-white link-dark">Contact</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img style="background-color: white;"
                            src="https://i.pinimg.com/originals/e3/0d/fd/e30dfd31ff111e18d8ba41ba4b14044e.png" alt="mdo"
                            class="rounded-circle" width="32" height="32">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">

                        <li><a class="dropdown-item" href="#">Hello Anonim User</a></li>

                        <li>
                            <form class="m-auto" method="get" action="assets/CV Reksa Prayoga S.pdf">
                                <button class="btn btn-outline-success w-100" type="submit">Download CV Saya</button>
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </header>
    <svg id="wave" style="transform:rotate(180deg); transition: 0.3s;position:absolute;z-index:-1;"
        viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
            d="M0,147L26.7,122.5C53.3,98,107,49,160,98C213.3,147,267,294,320,294C373.3,294,427,147,480,138.8C533.3,131,587,261,640,334.8C693.3,408,747,425,800,408.3C853.3,392,907,343,960,334.8C1013.3,327,1067,359,1120,359.3C1173.3,359,1227,327,1280,277.7C1333.3,229,1387,163,1440,187.8C1493.3,212,1547,327,1600,383.8C1653.3,441,1707,441,1760,367.5C1813.3,294,1867,147,1920,98C1973.3,49,2027,98,2080,147C2133.3,196,2187,245,2240,220.5C2293.3,196,2347,98,2400,89.8C2453.3,82,2507,163,2560,212.3C2613.3,261,2667,278,2720,310.3C2773.3,343,2827,392,2880,416.5C2933.3,441,2987,441,3040,392C3093.3,343,3147,245,3200,236.8C3253.3,229,3307,310,3360,302.2C3413.3,294,3467,196,3520,196C3573.3,196,3627,294,3680,294C3733.3,294,3787,196,3813,147L3840,98L3840,490L3813.3,490C3786.7,490,3733,490,3680,490C3626.7,490,3573,490,3520,490C3466.7,490,3413,490,3360,490C3306.7,490,3253,490,3200,490C3146.7,490,3093,490,3040,490C2986.7,490,2933,490,2880,490C2826.7,490,2773,490,2720,490C2666.7,490,2613,490,2560,490C2506.7,490,2453,490,2400,490C2346.7,490,2293,490,2240,490C2186.7,490,2133,490,2080,490C2026.7,490,1973,490,1920,490C1866.7,490,1813,490,1760,490C1706.7,490,1653,490,1600,490C1546.7,490,1493,490,1440,490C1386.7,490,1333,490,1280,490C1226.7,490,1173,490,1120,490C1066.7,490,1013,490,960,490C906.7,490,853,490,800,490C746.7,490,693,490,640,490C586.7,490,533,490,480,490C426.7,490,373,490,320,490C266.7,490,213,490,160,490C106.7,490,53,490,27,490L0,490Z">
        </path>
    </svg>
    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold ">Kiga Web</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Halo Selamat datang di website ini mungkin kalian bisa mengenal saya lebih dalam dari
                sini </p>
            <center>
                <p><b>iya gak ?</b></p>
            </center>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <button type="button" onclick="iya();" style="background-color: #ff5e14;"
                    class="btn btn-lg px-4 me-sm-3">Iya aja dah</button>
                <button type="button" onclick="gak();" class="btn btn-outline-info btn-lg px-4">Gak deh makasih</button>
            </div>
        </div>
        <div class="" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="https://i.imgur.com/80Yp4Cz.png" class="img-fluid border rounded-3 shadow-lg mb-4"
                    alt="Example image" loading="lazy" width="700" height="500">
            </div>
        </div>
    </div>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>




    <div class="container">



        <br>
        <div data-aos="fade-up" id="about" class="about">
            <center>
                <h2>About Me !</h2>
            </center>
            <br>
            <img src="" alt="">

            <h5 style="text-align: center;">Seseorang yang punya banyak waifu dan impian , content creator (Laravel ,
                flutter , Django , Flask , Unity) dan cuman orang yang suka coding , mtk , fisika serta pengangguran
                yang gabut

                kalau punya hal untuk ditanyain tanyaina aja insya allah saya jawab

                keep coding and stay drinking a coffee !</h5>
        </div>


        <br>


        <br>
        <br>
        <br>

        <div data-aos="fade-up" id="selengkapnya" class="column" style="height:600px;">

            <div class="d-flex justify-content-end" style=" flex:1;">
                <div style="flex:1; height:300px;">
                    <h3>Suka Kopi</h3>
                    <p>Saya adalah salah satu pencinta kopi , mulai dari expresso picollo bahkan kopi piala whahahaha ,
                        soalnya setiap saya ngopi tuh kek ngerasa tenang aja gitu</p>
                </div>
                <div
                    style="border-radius: 10px; background: url(https://www.superadventure.co.id/uploads/news/2018/08/21/2efe018b4650_crop_720_480_rel_left_top.jpg); flex:1;height:300px;background-position-y: center;">

                </div>
            </div>
            <br>
            <br>
            <div class="d-flex" style=" flex:1;">

                <div
                    style="background-image: url(https://1.bp.blogspot.com/-sOuCRUkt4ac/YA1ZuOvqAWI/AAAAAAAACnM/OffA8-HrRO0a4TxF3gE7sdi1tHPgrId8QCLcBGAsYHQ/s890/coding.jpg);border-radius: 10px;  flex:1;height:300px;">

                </div>
                <div style="flex:1; height:300px;text-align: right;margin: 10px;">
                    <h3>Ngoding Jalan ninjaku !</h3>
                    <p>yaaa sebenarnya baru baru ini saya kenal koding dan ya entah kenapa saya menyukai itu , padahal
                        dulu basic saya di kimia fisika dan matematika , tapi gpp lah memahami program tidak lebih sulit
                        dari memahami wanita </p>
                </div>

            </div>

        </div>
        <br>

        <br>
        <br>
        <br>
        <br>


        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br>
        <br>
        <br>
        <br>


        <br><br>

        <center>
            <h2><b>Gallery</b></h2>
            <br>
        </center>
        <div id="gallery" data-aos="fade-up" class="row" data-masonry="{&quot;percentPosition&quot;: true }"
            style="position: relative; height: 690px;">
            <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 0%; top: 0px;">
                <div class="card">
                    <img src="assets/FireShot Capture 046 - PLab - 127.0.0.1.png" alt="">

                    <div class="card-body">
                        <h5 class="card-title">PLab</h5>
                        <p class="card-text">Website untuk memesan laboratorium SMKN 4 BOGOR.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 33.3333%; top: 0px;">
                <div class="card">
                    <img src="assets/Screenshot from 2021-10-02 08-25-08.png" alt="">

                    <div class="card-body">
                        <h5 class="card-title">Coffeshop</h5>
                        <p class="card-text">Website Cashier untuk memesan coffee beserta dengan print bill dan
                            sebagainya .</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 66.6667%; top: 0px;">
                <div class="card">
                    <img src="assets/FireShot Capture 043 - KIGA - Cinema - 127.0.0.1.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Kiga - Cinema</h5>
                        <p class="card-text">Web App untuk order kursi bioskop yang dilengkapi dengan payment gateaway
                            paypall</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 33.3333%; top: 171px;">
                <div class="card bg-primary text-white text-center p-3">
                    <figure class="mb-0">
                        <blockquote class="blockquote">
                            <p>Daripada frontend / backend mending fullstack hehe.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mb-0 text-white">
                            Someone famous in <cite title="Source Title">Hatinya</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 33.3333%; top: 310px;">

                <div class="card-body">
                    <img class="w-100" src="assets/FireShot Capture 048 - Document - 127.0.0.1.png" alt="">
                    <h5 class="card-title">LKS2021</h5>
                    <p class="card-text">Web App E-Commerce yang saya buat saat lomba.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>

            </div>
            <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 0%; top: 362px;">
                <div class="card">
                    <img src="assets/FireShot Capture 047 - Home - asiabytes.tech.png" alt="">

                </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 33.3333%; top: 488px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">SISFOBETA 4.0</h5>
                        <p class="card-text">Project TNI AD yang sedang saya kerjakan saat ini yang memuat 4 app
                            diantaranya baltab , kpr , twp dan akunting.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>





        <br>
        <br>
        <br>
        <br>
        <br>

        <h2>Lokasi Saya !</h2>
        <br>
        <iframe id="location"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.9366662772445!2d106.76865931534735!3d-6.654772395188188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cf0a18381cbf%3A0xc126c10ca292e57d!2sJl.%20Raya%20Pondok%20Bitung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1632705282797!5m2!1sid!2sid"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <br>
        <br>


        <br><br>
        <br>
        <br>


        <br><br>

        <hr>

        <div id="contact" data-aos="fade-up" class="kontak">
            <h2>Kontak</h2>
            <br>
            <h6>anda kesulitan membuat blog ? ,webapp ? , apps ? , game ? , atau anda kesulitan mengerjakan soal mtk dan
                ipa ? langsung saja hubungi saya lalu bertanya , agar saya bisa membeli action figure</h6>
            <br>
            <br>
            <br>

            <div class="d-flex">
                <div
                    style="background: url(assets/undraw_Opened_re_i38e.svg);background-size: contain;background-repeat: no-repeat; flex:1;">

                </div>
                <div style="flex:1;">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>


    </div>

    <br>
    <br>
    <br>













    <footer class="footer-section">
        <div class="container">
            <div class="footer-kiga pt-5 pb-5">
                <div class="row ">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-kiga">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="kiga-text">
                                <h4>Find Me</h4>
                                <span>Kp Pondok Bitung RT 01 RW 02</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-kiga">
                            <i class="fas fa-phone"></i>
                            <div class="kiga-text">
                                <h4>Call Me</h4>
                                <span>+62 895331493506</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-kiga">
                            <i class="far fa-envelope-open"></i>
                            <div class="kiga-text">
                                <h4>Mail Me</h4>
                                <span>reksa.prayoga1012@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <center>
                        <h3 class="text-white" style="font-weight: bold;">Follow Me</h3>
                    </center>
                    <br>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="https://github.com/Kigamekun"><i class="fab fa-github fa-2x"></i></a>
                        <a href="https://www.instagram.com/puppetreaper/"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://twitter.com/KIGAMEKUN1"><i class="fab fa-twitter fa-2x"></i></a>

                    </div>

                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <center>
                        <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2021, All Right Reserved <a href="">KIGA</a></p>
                            </div>
                        </div>
                    </center>

                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"
        integrity="sha512-lOrm9FgT1LKOJRUXF3tp6QaMorJftUjowOWiDcG5GFZ/q7ukof19V0HKx/GWzXCdt9zYju3/KhBNdCLzK8b90Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@mojs/core"></script>

    <script>
        AOS.init();
    </script>

    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#head");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });

        //         $( document ).ready(function() {
        //             setTimeout(() => {
        //                 $('.preload').hide('slow');
        //             $('body').css('overflow-y','unset');
        //             }, 3000);
        // });

        $(document).ready(function () {
            $('a').on('click', function (e) {
                // e.preventDefault();


                var any = document.querySelectorAll(".navb li");
                for (let i = 0; i < any.length; i++) {
                    any[i].classList.remove('active');

                }

                $(this).parent('li').addClass("active");

                var target = this.hash,
                    $target = $(target);

                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top - 200
                }, 900, 'swing', function () {
                });

                console.log(window.location);

                return false;
            });
        });

        var btn = $('#button');

        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });



        function iya() {

            new Noty({

                text: 'Siap Makaseh!',
                timeout: 2000,
                theme: 'metroui',
                type: 'warning',
                animation: {
                    open: function (promise) {
                        var n = this;
                        var Timeline = new mojs.Timeline();
                        var body = new mojs.Html({
                            el: n.barDom,
                            x: { 500: 0, delay: 0, duration: 500, easing: 'elastic.out' },
                            isForce3d: true,
                            onComplete: function () {
                                promise(function (resolve) {
                                    resolve();
                                })
                            }
                        });

                        var parent = new mojs.Shape({
                            parent: n.barDom,
                            width: 200,
                            height: n.barDom.getBoundingClientRect().height,
                            radius: 0,
                            x: { [150]: -150 },
                            duration: 1.2 * 500,
                            isShowStart: true
                        });

                        n.barDom.style['overflow'] = 'visible';
                        parent.el.style['overflow'] = 'hidden';

                        var burst = new mojs.Burst({
                            parent: parent.el,
                            count: 10,
                            top: n.barDom.getBoundingClientRect().height + 75,
                            degree: 90,
                            radius: 75,
                            angle: { [-90]: 40 },
                            children: {
                                fill: '#EBD761',
                                delay: 'stagger(500, -50)',
                                radius: 'rand(8, 25)',
                                direction: -1,
                                isSwirl: true
                            }
                        });

                        var fadeBurst = new mojs.Burst({
                            parent: parent.el,
                            count: 2,
                            degree: 0,
                            angle: 75,
                            radius: { 0: 100 },
                            top: '90%',
                            children: {
                                fill: '#EBD761',
                                pathScale: [.65, 1],
                                radius: 'rand(12, 15)',
                                direction: [-1, 1],
                                delay: .8 * 500,
                                isSwirl: true
                            }
                        });

                        Timeline.add(body, burst, fadeBurst, parent);
                        Timeline.play();
                    },
                    close: function (promise) {
                        var n = this;
                        new mojs.Html({
                            el: n.barDom,
                            x: { 0: 500, delay: 10, duration: 500, easing: 'cubic.out' },
                            skewY: { 0: 10, delay: 10, duration: 500, easing: 'cubic.out' },
                            isForce3d: true,
                            onComplete: function () {
                                promise(function (resolve) {
                                    resolve();
                                })
                            }
                        }).play();
                    }
                }
            }).show();


        }


        function gak() {

            new Noty({

                text: 'Hmmmm',
                timeout: 2000,
                theme: 'metroui',
                type: 'warning',
                animation: {
                    open: function (promise) {
                        var n = this;
                        var Timeline = new mojs.Timeline();
                        var body = new mojs.Html({
                            el: n.barDom,
                            x: { 500: 0, delay: 0, duration: 500, easing: 'elastic.out' },
                            isForce3d: true,
                            onComplete: function () {
                                promise(function (resolve) {
                                    resolve();
                                })
                            }
                        });

                        var parent = new mojs.Shape({
                            parent: n.barDom,
                            width: 200,
                            height: n.barDom.getBoundingClientRect().height,
                            radius: 0,
                            x: { [150]: -150 },
                            duration: 1.2 * 500,
                            isShowStart: true
                        });

                        n.barDom.style['overflow'] = 'visible';
                        parent.el.style['overflow'] = 'hidden';

                        var burst = new mojs.Burst({
                            parent: parent.el,
                            count: 10,
                            top: n.barDom.getBoundingClientRect().height + 75,
                            degree: 90,
                            radius: 75,
                            angle: { [-90]: 40 },
                            children: {
                                fill: '#EBD761',
                                delay: 'stagger(500, -50)',
                                radius: 'rand(8, 25)',
                                direction: -1,
                                isSwirl: true
                            }
                        });

                        var fadeBurst = new mojs.Burst({
                            parent: parent.el,
                            count: 2,
                            degree: 0,
                            angle: 75,
                            radius: { 0: 100 },
                            top: '90%',
                            children: {
                                fill: '#EBD761',
                                pathScale: [.65, 1],
                                radius: 'rand(12, 15)',
                                direction: [-1, 1],
                                delay: .8 * 500,
                                isSwirl: true
                            }
                        });

                        Timeline.add(body, burst, fadeBurst, parent);
                        Timeline.play();
                    },
                    close: function (promise) {
                        var n = this;
                        new mojs.Html({
                            el: n.barDom,
                            x: { 0: 500, delay: 10, duration: 500, easing: 'cubic.out' },
                            skewY: { 0: 10, delay: 10, duration: 500, easing: 'cubic.out' },
                            isForce3d: true,
                            onComplete: function () {
                                promise(function (resolve) {
                                    resolve();
                                })
                            }
                        }).play();
                    }
                }
            }).show();


        }
    </script>
</body>

</html>