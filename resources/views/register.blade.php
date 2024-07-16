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
        .bg-register{
            background-color: #EDF1D6;
        }
        
        .box-register{
            background-color: transparent;
            backdrop-filter: blur(50%);
        }
        .text-register{
            color: #9DC08B;
        }
        .btn-register{
            background-color: #9DC08B;
            color: white;
            /* color: #EDF1D6; */
        }
        .btn-register:hover{
            background-color: #609966;
            color: white;
        }

    </style>
</head>
<body>
    <main>
        <div class="container-fluid bg-register " style="height: 100vh">
            <a class="btn btn-register rounded-pill my-1 shadow-sm" href="{{route('welcome.index')}}"><</a>
            <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 75vh">
                <div class="bg-white shadow p-2 rounded bg-opacity-25">
                    <h1 class="text-register fw-bold text-center">Register</h1>
                    @if (session('success'))
                        <p style="color: green;">{{ session('success') }}</p>
                    @endif

                    @if (session('error'))
                        <p style="color: red;">{{ session('error') }}</p>
                    @endif

                    @if ($errors->any())
                        <div style="color: red;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{-- @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif --}}
                    <form action="{{url('/api/register')}}" method="POST" class="px-5 py-2">
                        @csrf
                        <small class="text-register">Sudah mempunyai akun? <a href="{{route('login')}}">login disini</a></small>
                        <div class="input-group mb-1">
                            <span class="input-group-text btn-register">@</span>
                            <div class="form-floating">
                              <input id="nama" type="text" class="form-control" id="floatingInputGroup1" placeholder="Nama" name="nama">
                              <label for="floatingInputGroup1" class="text-register">Nama</label>
                            </div>
                        </div>                          
                        <div class="input-group mb-1">
                            <span class="input-group-text btn-register">@</span>
                            <div class="form-floating">
                              <input id="email" type="email" class="form-control" id="floatingInputGroup1" name="email" placeholder="Email">
                              <label for="floatingInputGroup1" class="text-register">Email</label>
                            </div>
                        </div>                          
                        <div class="input-group mb-1">
                            <span class="input-group-text btn-register">@</span>
                            <div class="form-floating">
                              <input id="username" type="text" class="form-control" id="floatingInputGroup1" name="username" placeholder="Email">
                              <label for="floatingInputGroup1" class="text-register">Username</label>
                            </div>
                        </div>                          
                        <div class="input-group mb-1">
                            <span class="input-group-text btn-register">@</span>
                            <div class="form-floating">
                                <input id="password" type="password" class="form-control" id="floatingInputGroup2" name="password" placeholder="Password">
                                <label for="floatingInputGroup2" class="text-register">Password</label>
                            </div>
                        </div>                          
                        <div class="input-group mb-1">
                            <span class="input-group-text btn-register">@</span>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingInputGroup2" placeholder="Confirm Password">
                                <label for="floatingInputGroup2" class="text-register">Confirm Password</label>
                            </div>
                        </div>                          
                        <div class="container-fluid d-flex justify-content-center">
                            <button type="submit" class="btn btn-register my-1 shadow-sm">Register</button>
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