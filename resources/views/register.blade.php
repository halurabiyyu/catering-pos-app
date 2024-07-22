<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('asset/catering-logo.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register - Catering App</title>
    <style>
        .bg-register{
            /* background-color: #EDF1D6; */
            background-image: url("{{asset('asset/slide1.jpg')}}");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .box-register{
            background-color: transparent;
            backdrop-filter: blur(50%);
        }
        .text-register{
            color:#FFB22C;
        }
        .btn-register{
            background-color: transparent;
            color:#FFB22C;
            border: #FFB22C solid 2px;
            /* color: #EDF1D6; */
        }
        .btn-register:hover{
            background-color: #FFB22C;
            color: white;
        }

    </style>
</head>
<body>
    <main>
        <div class="container-fluid bg-register " style="height: 100vh">
            <a class="btn btn-register rounded-pill my-1 shadow-sm" href="{{route('welcome.index')}}"><</a>
            <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 75vh">
                <div class="bg-black shadow p-2 rounded bg-opacity-50">
                    <h1 class="text-register fw-bold text-center">Register</h1>
                    @if (session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @elseif (session('error'))
                        <div class="alert alert-danger">{{session('error')}}</div>
                    @endif
                    <form action="{{route('proses_register')}}" method="POST" class="px-5 py-2">
                        @csrf
                        <small class="text-register">Sudah mempunyai akun? <a href="{{route('login')}}" class="text-register">login disini</a></small>
                        <div class="input-group mb-1">
                        
                            <div class="form-floating">
                              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="name" placeholder="Nama" name="nama">
                              <label for="name" class="text-register" required>Nama</label>
                            </div>
                        </div>
                        @error('nama')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror                        
                        <div class="input-group mb-1">
                        
                            <div class="form-floating">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                              <label for="email" class="text-register" required>Email</label>
                            </div>
                        </div>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror                          
                        <div class="input-group mb-1">
                        
                            <div class="form-floating">
                              <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Email">
                              <label for="username" class="text-register" required>Username</label>
                            </div>
                        </div>                          
                        @error('username')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="input-group mb-1">
                        
                            <div class="form-floating">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                <label for="password" class="text-register" required>Password</label>
                            </div>
                        </div>                          
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="input-group mb-1">
                        
                            <div class="form-floating">
                                <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm Password">
                                <label for="password_confirmation" class="text-register" required>Confirm Password</label>
                            </div>
                        </div>                          
                        @error('password_confirmation')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="container-fluid d-flex justify-content-center">
                            <button id="submit" type="submit" class="btn btn-register my-1 shadow-sm">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>