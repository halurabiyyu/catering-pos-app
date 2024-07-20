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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Checkout - Catering</title>
    <style>
        .non-scroll-hide {
            height: 100vh;
            overflow:auto; /* Add the ability to scroll */
        }

        .non-scroll-hide::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .non-scroll-hide {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
        }
    </style>
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
                        <a class="nav-link color-text-navbar" aria-current="page" href="{{url('/')}}">Beranda</a>
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
                {{-- <a class="btn btn-outline-success" href="{{route('login')}}">Login</a> --}}
            </div>
            </div>
        </nav>
        <div class="container-fluid" style="height: 100vh">
            <div class="row ">
                <div class="container-fluid col-md-8 non-scroll-hide">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card my-2 shadow">
                                <img src="{{asset('asset/menu-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card my-2">
                                <img src="{{asset('asset/menu-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card my-2">
                                <img src="{{asset('asset/menu-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card my-2">
                                <img src="{{asset('asset/menu-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card my-2">
                                <img src="{{asset('asset/menu-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card my-2">
                                <img src="{{asset('asset/menu-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card my-2">
                                <img src="{{asset('asset/menu-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card my-2">
                                <img src="{{asset('asset/menu-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card my-2">
                                <img src="{{asset('asset/menu-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card my-2">
                                <img src="{{asset('asset/menu-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card my-2">
                                <img src="{{asset('asset/menu-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card my-2">
                                <img src="{{asset('asset/menu-1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 bg-body-tertiary" style="height: 100vh;">
                    <div class="m-auto rounded bg-white my-4 p-2 shadow-sm" style="width: 90%;">
                        <div class="container-fluid">
                            <h3 class="fw-bold">Ringkasan Belanja</h3>
                        </div>
                        <div class="container-fluid">
                            <div class="d-flex justify-content-between my-2">
                                <div class="">
                                    <span>Total : </span>
                                </div>
                                <div class="">
                                    <span>Rp. 100.000</span>
                                </div>
                            </div>
                            <form action="" method="POST" >
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-success fw-bold" style="width: 60%" type="submit">Beli</button>
                                </div>
                            </form>
                        </div>


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
                                href="https://wa.me/+6289693853025">
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>


</body>
</html>