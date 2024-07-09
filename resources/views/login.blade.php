<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('asset/catering-logo.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login - Catering App</title>
    <style>
        .bg-login{
            background-color: #EDF1D6;
        }
        
        .box-login{
            background-color: transparent;
            backdrop-filter: blur(50%);
        }
        .text-login{
            color: #9DC08B;
        }
        .btn-login{
            background-color: #9DC08B;
            color: white;
            /* color: #EDF1D6; */
        }
        .btn-login:hover{
            background-color: #609966;
            color: white;
        }

    </style>
</head>
<body>
    <main>
        <div class="container-fluid bg-login " style="height: 100vh">
            <a class="btn btn-login rounded-pill my-1 shadow-sm" href="{{route('welcome.index')}}"><</a>
            <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 75vh">
                <div class="bg-white shadow p-2 rounded bg-opacity-25">
                    <h1 class="text-login fw-bold text-center">Log In</h1>
                    <form action="{{url('proses_login')}}" method="POST" class="px-5 py-2">
                        @csrf
                        <small class="text-login">Belum mempunyai akun? <a href="{{route('register')}}">register disini</a></small>
                        <div class="input-group">
                            <span class="input-group-text btn-login">@</span>
                            <div class="form-floating">
                              <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInputGroup1" name="email" placeholder="Email" value="{{ old('email') }}">
                              <label for="floatingInputGroup1" class="text-login">Email</label>
                            </div>
                        </div>                          
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="input-group my-1">
                            <span class="input-group-text btn-login">@</span>
                            <div class="form-floating">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingInputGroup2" name="password" placeholder="Password" value="{{ old('password') }}">
                                <label for="floatingInputGroup2" class="text-login">Password</label>
                            </div>
                        </div>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror           
                        <div class="container-fluid d-flex justify-content-center">
                            <button type="submit" class="btn btn-login my-1 shadow-sm">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>