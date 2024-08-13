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
    <title>Mam Catering</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
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

        .bg-bw {
            position: relative; /* Make sure the container has position relative */
        }

        .bg-bw::before {
            content: "";
            background-image: url("{{ asset('asset/bw-bg.jpg') }}");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 10px;
            opacity: 0.5; /* Adjust the opacity as needed */
            z-index: 1; /* Ensure it is behind the content */
        }

        .bg-bw-content {
            position: relative; /* Ensure the content is positioned correctly */
            z-index: 2; /* Ensure the content is above the background */
        }

        .rating-z{
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
        .count-number {
            animation: count-animation 0.5s ease-out forwards;
        }

        @keyframes count-animation {
            from {
                transform: translateY(-50%);
            }
            to {
                transform: translateY(0);
            }
        }
        </style>
</head>
<body class="overflow-x-hidden">
    <nav class="navbar fixed-top overflow-x-hidden navbar-custom navbar-expand-lg transparent-navbar">
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
            @if (Auth::check())
            <form id="logout-form" action="{{ route('logout') }}" method="get" style="display: none;">
                @csrf
            </form>
            <div class="p-1 mx-3 position-relative">
                <a href="{{route('checkout.index')}}">
                    <img src="{{asset('asset/cart.svg')}}" style="width:50px; height:50px;" alt="">
                    <span class="position-absolute top-10 start-100 translate-middle badge rounded-pill bg-danger">
                        {{$countCart}}
                    </span>
                </a>
            </div>
            @endif
            <a class="btn button-login shadow" 
                href="{{ Auth::check() ? route('logout') : route('login') }}"
                onclick="{{ Auth::check() ? "event.preventDefault(); document.getElementById('logout-form').submit();" : "" }}">
                {{ Auth::check() ? 'Logout' : 'Login' }}
            </a>
        </div>
    </div>
</nav>
<main class="">
<div class="container-fluid bg-image" id="home">
    <div class="content container-fluid p-0 d-flex flex-column-reverse flex-lg-row align-items-center" style="height:85vh;">
        <div class="px-5 mb-5 box">
            <h1 class="fw-bold text-white">Mam Catering</h1>
            <p class="text-white">Kami menyajikan solusi kuliner terlengkap untuk setiap acara Anda. Dengan lebih dari 30 pilihan menu lezat, kami menawarkan variasi rasa yang akan memanjakan lidah semua tamu. Dari hidangan tradisional hingga internasional, kami memiliki semuanya!</p>
            <a href="" class="btn button-login">Pesan Sekarang</a>
        </div>
    </div>
        </div>
        <div class="container-fluid bg-body-tertiary py-5">
            <div class="bg-bw m-auto p-3 rounded-3 bg-white shadow text-black px-5 d-flex align-items-center justify-content-center container"  id="rating" style="height: 15vh;">
                <div class="row bg-bw-content">
                    <div class="col">
                        <div class="d-flex justify-content-lg-evenly">
                            
                            <img src="{{asset('asset/star-rating.svg')}}" data-aos="zoom-out" data-aos-duration="1000" style="width: 45px; height:45px;" alt="">    
                            <img src="{{asset('asset/star-rating.svg')}}" data-aos="zoom-out" data-aos-duration="1000" style="width: 45px; height:45px;" alt="">    
                            <img src="{{asset('asset/star-rating.svg')}}" data-aos="zoom-out" data-aos-duration="1000" style="width: 45px; height:45px;" alt="">    
                            <img src="{{asset('asset/star-rating.svg')}}" data-aos="zoom-out" data-aos-duration="1000" style="width: 45px; height:45px;" alt="">    
                            <img src="{{asset('asset/star-rating.svg')}}" data-aos="zoom-out" data-aos-duration="1000" style="width: 45px; height:45px;" alt="">    
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-lg-evenly">
                            <h1 class="fw-bold count-number" data-target="30">0</h1><h1 class="fw-bold">+</h1>
                            <img src="{{asset('asset/sum-menu.svg')}}" style="width: 45px; height:45px;" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-lg-evenly">
                            <h1 class="fw-bold fs-1 count-number" data-target="100">0</h1>
                            <img src="{{asset('asset/sum-cust.svg')}}" style="width: 45px; height:45px;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-body-tertiary pb-5">
            <div id="menu" class="container d-flex flex-column flex-column-reverse flex-lg-row-reverse align-items-center box-menu rounded shadow-sm bg-white">
                <div class="px-5 m-auto text-wrap" data-aos="fade-left" data-aos-duration="1000">
                    <h1 class="text-black fw-bold text-start fs-1">Menu Kita</h1>
                    <p class="">Nikmati beragam pilihan hidangan lezat kami yang dibuat dengan bahan-bahan segar berkualitas. Dari masakan tradisional hingga kuliner internasional, kami menyajikan cita rasa autentik untuk memenuhi selera Anda. Temukan variasi menu yang menggugah selera untuk setiap acara istimewa Anda.</p>
                    <a href="{{route('menu.index')}}" class="btn button-orange mb-2">Lihat semua menu</a>
                </div>
                <div class="container-menu m-auto py-2 px-5">
                    {{-- @for ($i = 1; $i <= 6; $i++) --}}
                        <div class="tes1 m-1 img-menu rounded" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{asset('asset/slide5.jpg')}}" class=" rounded" alt="menu-6">
                        </div>
                        <div class="tes2 m-1 img-menu rounded" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{asset('asset/slide5.jpg')}}" class=" rounded" alt="menu-6">
                        </div>
                        <div class="tes3 m-1 img-menu rounded" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{asset('asset/slide5.jpg')}}" class=" rounded" alt="menu-6">
                        </div>
                        <div class="tes4 m-1 img-menu rounded" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{asset('asset/slide5.jpg')}}" class=" rounded" alt="menu-6">
                        </div>
                        <div class="tes5 m-1 img-menu rounded" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{asset('asset/slide5.jpg')}}" class=" rounded" alt="menu-6">
                        </div>
                        <div class="tes6 m-1 img-menu rounded" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{asset('asset/slide5.jpg')}}" class=" rounded" alt="menu-6">
                        </div>
                    {{-- @endfor --}}
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
    <script>
        window.addEventListener('load', function() {
        const countNumbers = document.querySelectorAll('.count-number');

        countNumbers.forEach(countNumber => {
            const target = parseInt(countNumber.getAttribute('data-target'));

            let currentNumber = 0;
            const counter = setInterval(() => {
            if (currentNumber < target) {
                currentNumber++;
                countNumber.textContent = currentNumber;
            } else {
                clearInterval(counter);
            }
            }, 30); // Sesuaikan kecepatan animasi dengan mengubah nilai ini (dalam milidetik)
        });
        });
    </script>
</body>
</html>