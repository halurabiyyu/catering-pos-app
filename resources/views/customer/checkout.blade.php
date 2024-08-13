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
        .summary-box{
            width: 60%;
        }
        #category {
            white-space: nowrap;
            overflow-x: auto;
            padding-bottom: 10px; /* Optional, to add some space below the buttons */
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */ 
        }

        #category div {
            display: inline-block; /* Ensure the items are displayed inline */
        }
        @media (max-width: 768px) {
            .summary-box {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                width: 100%;
                margin: 0;
                border-radius: 0;
                z-index: 1000;
            }
            #food-item {
                display: flex;
                flex-direction: row;
            }

            #food-item .col-lg-2 {
                flex: 0 0 auto;
                width: auto;
            }

            #food-item .col-lg-10 {
                flex: 1 0 auto;
                width: auto;
            }

            #food-item .d-flex {
                flex-direction: row;
                justify-content: space-between;
                width: 100%;
            }   
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
        <div class="container-fluid bg-body-tertiary" style="height: 100vh">
            <div class="d-flex m-auto justify-content-center align-items-center">
                <div class="container-fluid mx-0 col-md-6 non-scroll-hide " >
                    <div class="mt-3">
                        <h3 class="fw-bold">Keranjang</h3>
                    </div>
                    <div class="bg-white shadow-sm rounded mb-4 p-2 ">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <div class="row" id="food-item">
                                <div class="col-lg-2">
                                    <div class="d-flex justify-content-lg-center">
                                        <img src="{{asset('asset/slide1.jpg')}}" class="img-fluid rounded" alt="" style="width: 80px; height:80px">
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="d-flex justify-content-between">
                                        <span>Title Food</span>
                                        <span class="fw-bold">$Price Food</span>
                                    </div>
                                    <div class="d-flex justify-content-end mt-5">
                                        <a href="" class="text-decoration-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#909294" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                              </svg>
                                        </a>
                                    </div>  
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 bg-body-tertiary" style="height: 100vh;" id="total">
                    <div class="rounded bg-white mb-5 mt-5 p-2 shadow-sm summary-box">
                        <div class="container-fluid">
                            <span class="fw-bold">Ringkasan Belanja</span>
                        </div>
                        <div class="container-fluid">
                            <div class="d-flex justify-content-between my-2">
                                <div class="">
                                    <span>Total : </span>
                                </div>
                                <div class="">
                                    <span class="fw-bold">Rp. 100.000</span>
                                </div>
                            </div>
                            <form action="" method="POST" >
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-success fw-bold" style="width: 100%" type="submit">Beli</button>
                                </div>
                            </form>
                        </div>
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


</body>
</html>



