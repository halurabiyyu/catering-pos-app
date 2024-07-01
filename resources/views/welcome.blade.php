<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('asset/catering-logo.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Catering - Point of Sales</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .bg-navbar{
            background-color: #EDF1D6;
        }
        .bg-soft{
            background-color: #EDF1D6;
        }
        .bg-medium{
            background-color: #609966;
        }
        .bg-hard{
            background-color: #40513B;
        }
        .color-text-navbar{
            color: #609966;
        }
        .color-text-navbar:hover{
            color: #40513B;
        }
        .color-text-navbar:active{
            color: #40513B
        }
        .container-img {  display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr;
            gap: 0px 0px;
            grid-auto-flow: row;
        }

        .thumb { grid-area: 1 / 1 / 3 / 3; }

        .thimb { grid-area: 2 / 2 / 4 / 4; }

    </style>
</head>
<body>
    <main class="">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
            <a class="navbar-brand color-text-navbar" href="#"><img src="{{asset('asset/catering-logo.svg')}}" style="width: 50px; height:50px;" alt="catering-logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""><img src="{{asset('asset/navbutton.svg')}}" alt="navbar burger" style="width:20px; height:20px;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link color-text-navbar" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-text-navbar" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle color-text-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                    <ul class="dropdown-menu color-text-navbar">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
                </ul>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </div>
        </nav>
        <div class=" bg-soft">
            <div id="home" class="container-fluid p-2 d-flex flex-column-reverse flex-lg-row align-items-center" style="height:85vh;">
                <div class="px-5 mb-5">
                    <h1 class="fw-bold">Mam Catering</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dolorum, est culpa libero voluptatem illum modi minima! Asperiores quod animi unde officiis nesciunt quae, dolore enim, numquam id doloribus molestias?</p>
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
      </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>