<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('asset/welcome.css')}}">
    <link rel="icon" href="{{asset('asset/catering-logo.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Catering - Point of Sales</title>
</head>
<body>
    <main class="">
        <nav class="navbar sticky-top shadow-sm navbar-expand-lg bg-white">
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
                        <a class="nav-link color-text-navbar" href="#location">Lokasi</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle color-text-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                        </a>
                        <ul class="dropdown-menu color-text-navbar">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> --}}
                </ul>
                {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form> --}}
                <a class="btn btn-outline-success" href="{{route('login')}}">Login</a>
            </div>
            </div>
        </nav>
        <div class=" bg-soft">
            <div id="home" class="container-fluid p-2 d-flex flex-column-reverse flex-lg-row align-items-center" style="height:85vh;">
                <div class="px-5 mb-5">
                    <h1 class="fw-bold color-text-h1">Mam Catering</h1>
                    <p class="color-text-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dolorum, est culpa libero voluptatem illum modi minima! Asperiores quod animi unde officiis nesciunt quae, dolore enim, numquam id doloribus molestias?</p>
                    <a href="#menu" class="btn btn-success">Pesan Sekarang</a>
                </div>
                <div class="px-5 mb-5">
                    <div class="container-img">
                        <div class="thumb">
                            <img src="{{asset('asset/img-2.jpg')}}" class="img-fluid img-thumbnail" alt="">
                        </div>
                        <div class="thimb">
                            <img src="{{asset('asset/img-2.jpg')}}" class="img-fluid img-thumbnail" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container-fluid bg-semi-soft px-5 d-flex align-items-center justify-content-center" id="rating" style="height: 15vh;">
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
        <div>
            <div id="menu" class="container-fluid my-2 p-2 d-flex flex-column flex-lg-row-reverse align-items-center" style="height: 85vh">
                <div class="px-5 m-auto">
                    <h1 class="color-text-h1 fw-bold text-start fs-1">Menu Kita</h1>
                    <p class="color-text-p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut cumque debitis quas incidunt! Eum odio tempora quos commodi dolorem ratione omnis est alias sapiente minima, rem error, nesciunt, distinctio vel.</p>
                    <a href="" class="btn btn-success">Lihat semua menu</a>
                </div>
                <div class="container-menu m-auto py-2 px-5">
                    <div class="tes1 m-1">
                        <img src="{{asset('asset/menu-1.jpg')}}" class="img-menu rounded" alt="menu-1">
                    </div>
                    <div class="tes2 m-1">
                        <img src="{{asset('asset/menu-2.jpeg')}}" class="img-menu rounded" alt="menu-2">
                    </div>
                    <div class="tes3 m-1">
                        <img src="{{asset('asset/menu-1.jpg')}}" class="img-menu rounded" alt="menu-3">
                    </div>
                    <div class="tes4 m-1">
                        <img src="{{asset('asset/menu-2.jpeg')}}" class="img-menu rounded" alt="menu-4">
                    </div>
                    <div class="tes5 m-1">
                        <img src="{{asset('asset/menu-1.jpg')}}" class="img-menu rounded" alt="menu-5">
                    </div>
                    <div class="tes6 m-1">
                        <img src="{{asset('asset/menu-2.jpeg')}}" class="img-menu rounded" alt="menu-6">
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container-fluid bg-hard" style="height: 15vh">
                <div class="row">
                    <div class="col text-center text-lg-end">
                        <p class="text-center text-lg-end fw-bold color-text-footer">Kontak</p>
                        <div>
                            <a class="text-decoration-none color-text-footer" target="_blank"
                                href="https://wa.me/+628969385305">
                                <img src="{{asset('asset/wa.svg')}}" style="width: 20px; height:20px;" alt="whatsapp">
                                Whatsapp
                            </a>
                        </div>
                    </div>
                    <div class="col text-center text-lg-center my-3 m-lg-0">
                        <p class="text-center fw-bolder color-text-footer">Lokasi</p>
                        <a href="https://maps.app.goo.gl/7hxDPSenfALYWvBz5"
                            class="text-decoration-none color-text-footer" target="_blank">
                            <img src="{{asset('asset/pin-address.svg')}}" style="width:20px; height:20px" alt="pin map">
                            Rajeg Mas Pratama, Kab. Tangerang, Banten.
                        </a>
                    </div>
                    <div class="col-sm text-center text-lg-start px-0 m-0 overflow-hidden">
                        <p class="text-center text-lg-start fw-bold color-text-footer">Ikuti Kami</p>
                        <a class="text-decoration-none color-text-footer" href="https://instagram.com/haluraby" target="_blank">
                            <img src="{{asset('asset/instagram.svg')}}" style="width:20px; height:20px" alt="instagram">
                            Instagram
                        </a>
                    </div>
                </div>
                <p class="text-center color-text-footer">&copy; <span id="year"></span> All Rights Reserved - @haluraby </p>
            </div>
        </footer>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>