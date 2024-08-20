<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('asset/welcome.css')}}">
    <link rel="stylesheet" href="{{asset('asset/checkout.css')}}">
    <link rel="icon" href="{{asset('asset/logo-cook.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Keranjang - Catering</title>
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
            <form action="{{route('checkout.process')}}" method="POST" >
            @csrf
            <div class="d-flex m-auto justify-content-center align-items-center">
                <div class="container-fluid mx-0 col-md-6 non-scroll-hide " >
                    @if (session('success'))
                        <div class="my-1 alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    @if (session('message'))
                        <div class="my-1 alert alert-warning">
                            {{session('message')}}
                        </div>
                    @endif
                    <div class="mt-3">
                        <h3 class="fw-bold">Keranjang</h3>
                    </div>
                    @forelse ($carts as $cart)
                    <div class="bg-white shadow-sm rounded mb-4 p-2">
                        <div class="form-check">
                                <input class="form-check-input product-checkbox" type="checkbox" name="carts[]" value="{{ $cart->cart_id }}" data-price="{{ $cart->food->food_price }}" id="flexCheckDefault">
                                <div class="row" id="food-item">
                                    <div class="col-lg-2">
                                        <div class="d-flex justify-content-lg-center">
                                            <img src="{{ asset('asset/slide1.jpg') }}" class="img-fluid rounded" alt="" style="width: 80px; height:80px">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="d-flex justify-content-between">
                                            <span>{{ $cart->food->food_name }}</span>
                                            <span class="fw-bold">${{ $cart->food->food_price }}</span>
                                        </div>
                                        <div class="d-flex justify-content-end mt-5">
                                            <div class="d-flex align-items-center">
                                                <button type="button" class="btn btn-sm btn-outline-secondary decrease-quantity" data-id="{{ $cart->cart_id }}">-</button>
                                                <input type="number" class="form-control text-center mx-2 quantity-input" name="quantities[{{ $cart->cart_id }}]" value="1" min="1" style="width: 50px;">
                                                <button type="button" class="btn btn-sm btn-outline-secondary increase-quantity" data-id="{{ $cart->cart_id }}">+</button>
                                            </div>
                                            <button type="button" class="btn delete-button" data-id="{{ $cart->cart_id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#909294" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                </svg>
                                            </button>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="container-fluid d-flex justify-content-center">
                            <small class="text-secondary text-center">Belum ada apapun dalam keranjang</small>
                        </div>
                    @endforelse
                </div>
                <div class="col-md-4 bg-body-tertiary" style="height: 100vh;" id="total">
                    <div class="rounded bg-white p-2 shadow-sm summary-box">
                        <div class="container-fluid">
                            <span class="fw-bold">Ringkasan Belanja</span>
                        </div>
                        <div class="container-fluid">
                            <div class="d-flex justify-content-between my-2">
                                <div class="">
                                    <span>Total : </span>
                                </div>
                                <div class="">
                                    <strong>
                                        $<span class="" id="totalPrice">0.00</span>
                                    </strong>
                                </div>
                            </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-success fw-bold" style="width: 100%" type="submit">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
    <script src="{{asset('asset/checkout.js')}}"></script>
    <script>
        document.querySelectorAll('.delete-button').forEach(button => {
            button.addEventListener('click', function() {
                const cartId = this.getAttribute('data-id');
                if (confirm('Are you sure you want to delete this item?')) {
                    fetch(`{{ url('/customer/checkout/') }}/${cartId}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        if (data.success) {
                            window.location.href = window.location.href;
                        } else {
                            alert('Error deleting item.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                }
            });
        });
    </script>
</body>
</html>