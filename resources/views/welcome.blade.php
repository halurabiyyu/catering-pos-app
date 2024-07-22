<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('asset/welcome.css')}}">
    <link rel="icon" href="{{asset('asset/logo-cook.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Catering - Point of Sales</title>
    <style>
        .bg-image{
            background-image: url("{{ asset('asset/slide1.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
        }

        .bg-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 70%; /* Adjust the width as needed */
            height: 100vh;
            background: linear-gradient(to right, rgb(0, 0, 0), rgba(0, 0, 0, 0));
            filter: blur(10px); /* Adjust the blur radius as needed */
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
        }

        /* styles.css */
        .navbar-custom {
            transition: background-color 0.3s ease;
        }

        .transparent-navbar {
            /* background-position: center; */
            background-color: transparent !important;
        }

        .scrolled-navbar {
            background-color: rgba(54, 54, 54, 0.9) !important; /* Adjust color and opacity as needed */
        }

        .color-text-navbar {
            color: #ffffff; /* Adjust text color as needed */
        }
        .color-text-navbar:hover{
            color:#ffffff;
            font-weight: bolder;
        }
        .box{
            width: 50%;
            max-width: 100%;
        }

        .box-menu{
            height: 85vh;
            max-height: 100vh;
        }

        .footer{
            background-color: rgba(54, 54, 54, 0.9);
        }

        @media (max-width: 768px) {
            .navbar .nav-link {
                text-align: center;
            }
            .bg-image::before {
                width: 100%; /* Adjust the width for smaller screens */
                filter: blur(5px); /* Adjust the blur for smaller screens */
            }
            .box{
                width: 100%;
            }
            .box-menu{
                height: 100vh;
            }
        }

        .button-orange{
            background-color: #FFB22C;
            color: white;
        }
        .button-orange:hover{
            background-color: transparent;
            border: #FFB22C solid 2px;
            color: #FFB22C;
        }
        .button-login{
            background-color: transparent;
            border: #FFB22C solid 2px;
            color: #FFB22C;
        }
        .button-login:hover{
            background-color: #FFB22C;
            color: white;
        }
        
        </style>
</head>
<body class="">
    <nav class="navbar fixed-top navbar-expand-lg transparent-navbar">
        <div class="container-fluid">
            <a class="navbar-brand color-text-navbar" href="#home"><img src="{{asset('asset/catering-logo.svg')}}" style="width: 50px; height:50px;" alt="catering-logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""><img src="{{asset('asset/navbutton.svg')}}" alt="navbar burger" style="width:20px; height:20px;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link color-text-navbar" aria-current="page" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-text-navbar" href="#menu">Menu</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link color-text-navbar" href="#contact">Kontak</a>
                </li>
            </ul>
            <a class="btn button-login shadow" href="{{route('login')}}">Login</a>
            </div>
        </div>
    </nav>
    <main class="m-auto">
        <div class="container-fluid bg-image" id="home">
            <div class="content container-fluid p-0 d-flex flex-column-reverse flex-lg-row align-items-center" style="height:85vh;">
                <div class="px-5 mb-5 box">
                    <h1 class="fw-bold text-white">Mam Catering</h1>
                    <p class="text-white">Kami menyajikan solusi kuliner terlengkap untuk setiap acara Anda. Dengan lebih dari 30 pilihan menu lezat, kami menawarkan variasi rasa yang akan memanjakan lidah semua tamu. Dari hidangan tradisional hingga internasional, kami memiliki semuanya!</p>
                    <a href="{{route('checkout.index')}}" class="btn button-login">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-body-tertiary py-5">
            <div class="rounded-pill m-auto p-3 bg-white shadow text-black px-5 d-flex align-items-center justify-content-center container"  id="rating" style="height: 15vh;">
                <div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-lg-evenly">
                            <h1 class="">4.8</h1>
                            <img src="{{asset('asset/star-rating.svg')}}" style="width: 45px; height:45px;" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-lg-evenly">
                            <h1 class="">30+</h1>
                            <img src="{{asset('asset/sum-menu.svg')}}" style="width: 45px; height:45px;" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-lg-evenly">
                            <h1 class="">100</h1>
                            <img src="{{asset('asset/sum-cust.svg')}}" style="width: 45px; height:45px;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-body-tertiary pb-5">
            <div id="menu" class="container d-flex flex-column flex-column-reverse flex-lg-row-reverse align-items-center box-menu rounded shadow bg-white">
                <div class="px-5 m-auto text-wrap">
                    <h1 class="text-black fw-bold text-start fs-1">Menu Kita</h1>
                    <p class="">Nikmati beragam pilihan hidangan lezat kami yang dibuat dengan bahan-bahan segar berkualitas. Dari masakan tradisional hingga kuliner internasional, kami menyajikan cita rasa autentik untuk memenuhi selera Anda. Temukan variasi menu yang menggugah selera untuk setiap acara istimewa Anda.</p>
                    <a href="" class="btn button-orange">Lihat semua menu</a>
                </div>
                <div class="container-menu m-auto py-2 px-5">
                    <div data-aos="fade-right" data-aos-duration="1000" class="img-menu rounded tes1 m-1">
                        <img src="{{asset('asset/slide2.jpg')}}" class="rounded" style="width:100%; height:100%;" alt="menu-1">
                    </div>
                    <div data-aos="fade-right" class="tes2 m-1 img-menu rounded" data-aos-duration="1000">
                        <img src="{{asset('asset/slide3.jpg')}}" class=" rounded" alt="menu-2">
                    </div>
                    <div class="tes3 m-1 img-menu rounded" data-aos="fade-right" data-aos-duration="1000">
                        <img src="{{asset('asset/slide4.jpg')}}" class=" rounded" alt="menu-3">
                    </div>
                    <div class="tes4 m-1 img-menu rounded" data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{asset('asset/slide5.jpg')}}" class=" rounded" alt="menu-4">
                    </div>
                    <div class="tes5 m-1 img-menu rounded" data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{asset('asset/slide2.jpg')}}" class=" rounded" alt="menu-5">
                    </div>
                    <div class="tes6 m-1 img-menu rounded" data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{asset('asset/slide5.jpg')}}" class=" rounded" alt="menu-6">
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container-fluid footer" id="contact">
                <div class="row">
                    <div class="col text-center text-lg-end">
                        <p class="text-center text-lg-end fw-bold text-secondary">Kontak</p>
                        <div>
                            <a class="text-decoration-none text-secondary" target="_blank"
                                href="https://wa.me/+6289693853025">
                                <img src="{{asset('asset/wa.svg')}}" style="width: 20px; height:20px;" alt="whatsapp">
                                Whatsapp
                            </a>
                        </div>
                    </div>
                    <div class="col text-center text-lg-center my-3 m-lg-0">
                        <p class="text-center fw-bolder text-secondary">Lokasi</p>
                        <a href="https://maps.app.goo.gl/7hxDPSenfALYWvBz5"
                            class="text-decoration-none text-secondary" target="_blank">
                            <img src="{{asset('asset/pin-address.svg')}}" style="width:20px; height:20px" alt="pin map">
                            Rajeg Mas Pratama, Kab. Tangerang, Banten.
                        </a>
                    </div>
                    <div class="col-sm text-center text-lg-start px-0 m-0 overflow-hidden">
                        <p class="text-center text-lg-start fw-bold text-secondary">Ikuti Kami</p>
                        <a class="text-decoration-none text-secondary" href="https://instagram.com/haluraby" target="_blank">
                            <img src="{{asset('asset/instagram.svg')}}" style="width:20px; height:20px" alt="instagram">
                            Instagram
                        </a>
                    </div>
                </div>
                <p class="text-center text-secondary m-0">&copy; <span id="year"></span> All Rights Reserved - @haluraby </p>
            </div>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled-navbar');
                navbar.classList.remove('transparent-navbar');
            } else {
                navbar.classList.add('transparent-navbar');
                navbar.classList.remove('scrolled-navbar');
            }
        });
    </script>

</body>
</html>