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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Semua Menu - Catering</title>
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

        .button-orange{
            background-color: #FFB22C;
            color: white;
        }
        .color-navbar{
            background-color: rgba(54, 54, 54, 0.9);
        }
    </style>
</head>
<body>
    <main class="">
        <nav class="navbar sticky-top shadow-sm navbar-expand-lg color-navbar">
            <div class="container-fluid">
                <a class="navbar-brand color-text-navbar" href="#home"><img src="{{asset('asset/catering-logo.svg')}}" style="width: 50px; height:50px;" alt="catering-logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""><img src="{{asset('asset/navbutton.svg')}}" alt="navbar burger" style="width:20px; height:20px;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="{{url('/')}}">Beranda</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid" style="height: 100vh">
            <div class="row ">
                <div class="container-fluid col-md-8 non-scroll-hide">
                    {{-- @for ($i = 0; $i < 4; $i++) --}}
                        <div class="row">
                            @foreach ($foods as $food)    
                                <div class="col-sm-3">
                                    <div class="card my-2 shadow">
                                        <img src="{{asset('asset/slide1.jpg')}}" class="card-img-top" alt="menu-{{$food->food_id}}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$food->food_name}}</h5>
                                            <p class="my-1">${{$food->food_price}}</p>
                                            <div class="d-flex justify-content-end">
                                                <button href="#" class="btn btn-warning p-auto mx-1" data-bs-toggle="modal" data-bs-target="#menu{{$food->food_id}}">
                                                    <span><img src="{{asset('asset/info.svg')}}" alt=""></span>
                                                </button>
                                                <form action="{{route('checkout.addCart')}}" method="post">
                                                    @csrf
                                                    <button class="btn btn-success">
                                                        <span><img src="{{asset('asset/cart-plus.svg')}}" alt=""></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="menu{{$food->food_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">{{$food->food_name}}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <h3 class="fw-bold">{{$food->food_name}}</h3>
                                                <p>${{$food->food_price}}</p>
                                                <p>{{$food->food_desc}}</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- @endfor --}}
                        </div>
                    {{-- @endfor --}}
                </div>
            </div>
        </div>
        <footer>
            <div class="container-fluid color-navbar" style="height: 15vh">
                <div class="row">
                    <div class="col text-center text-lg-end">
                        <p class="text-center text-lg-end fw-bold text-body-secondary">Kontak</p>
                        <div>
                            <a class="text-decoration-none text-body-secondary" target="_blank"
                                href="https://wa.me/+6289693853025">
                                <img src="{{asset('asset/wa.svg')}}" style="width: 20px; height:20px;" alt="whatsapp">
                                Whatsapp
                            </a>
                        </div>
                    </div>
                    <div class="col text-center text-lg-center my-3 m-lg-0">
                        <p class="text-center fw-bolder text-body-secondary">Lokasi</p>
                        <a href="https://maps.app.goo.gl/7hxDPSenfALYWvBz5"
                            class="text-decoration-none text-body-secondary" target="_blank">
                            <img src="{{asset('asset/pin-address.svg')}}" style="width:20px; height:20px" alt="pin map">
                            Rajeg Mas Pratama, Kab. Tangerang, Banten.
                        </a>
                    </div>
                    <div class="col-sm text-center text-lg-start px-0 m-0 overflow-hidden">
                        <p class="text-center text-lg-start fw-bold text-body-secondary">Ikuti Kami</p>
                        <a class="text-decoration-none text-body-secondary" href="https://instagram.com/haluraby" target="_blank">
                            <img src="{{asset('asset/instagram.svg')}}" style="width:20px; height:20px" alt="instagram">
                            Instagram
                        </a>
                    </div>
                </div>
                <p class="text-center text-body-secondary">&copy; <span id="year"></span> All Rights Reserved - @haluraby </p>
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