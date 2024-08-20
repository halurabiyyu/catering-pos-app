<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('asset/welcome.css')}}">
    <link rel="icon" href="{{asset('asset/logo-cook.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Transaksi - Catering</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }   
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
        .footer{
            background-color: rgba(54, 54, 54, 0.9);
        }
    </style>
</head>
<body>
    <main class="">
        <nav class="navbar sticky-top shadow-sm navbar-expand-lg color-navbar">
            <div class="container-fluid">
                <a class="navbar-brand color-text-navbar" href="{{url('/')}}"><img src="{{asset('asset/catering-logo.svg')}}" style="width: 50px; height:50px;" alt="catering-logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""><img src="{{asset('asset/navbutton.svg')}}" alt="navbar burger" style="width:20px; height:20px;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link  text-white" aria-current="page" href="{{url('/')}}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white" href="{{route('menu.index')}}">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white" href="#contact">Kontak</a>
                    </li>
                </ul>
                @if (Auth::check())
                <form id="logout-form" action="{{ route('logout') }}" method="get" style="display: none;">
                    @csrf
                </form>
                <div class="p-1 me-2 position-relative">
                    <a href="{{route('checkout.index')}}">
                        <img src="{{asset('asset/cart-white.svg')}}" style="width:25px; height:25px;" alt="">
                        <span class="position-absolute top-10 start-lg-100 translate-middle badge rounded-pill bg-danger">
                            {{$countCart}}
                        </span>
                    </a>
                </div>
                <div class="me-2">
                    <a href="{{route('userShowTransaction')}}">
                        <img src="{{asset('asset/transaction-white.svg')}}" alt="transaction logo">
                    </a>
                </div>
                @endif
                <a class="btn btn-outline-secondary shadow text-white" 
                    href="{{ Auth::check() ? route('logout') : route('login') }}"
                    onclick="{{ Auth::check() ? "event.preventDefault(); document.getElementById('logout-form').submit();" : "" }}">
                    {{ Auth::check() ? 'Logout' : 'Login' }}
                </a>
            </div>
        </nav>
        <div class="container-fluid bg-body-tertiary" style="height: 100vh">
            <div class="d-flex justify-content-center align-items-center">
                <div class="container-fluid table-responsive my-3">
                    <table class="table table-striped table-hover border">
                        <tr>
                            <th>Tanggal</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                        </tr>
                        @foreach ($transaction as $item)
                            <tr>
                                <td>{{$item->created_at}}</td>
                                <td>${{$item->total_harga}}</td>
                                <td>{{$item->status}}</td>
                            </tr>
                        @endforeach
                    </table>
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
</body>
</html>