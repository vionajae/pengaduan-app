<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="dashboard">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Login</a>
              <div class="container-fluid">
                <form class="d-flex" role="search">
                </form>
              </div>
            </ul>
          </div>
        </div>
      </nav> 






    <div id="min" class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px;">
                <div class="card-body">
                    <h4 class="h4">Selamat Datang</h4>
                    
                    @if(session('pesan'))
                    <div class="alert alert-success" role="alert">
                       {{session('pesan')}} 
                      </div>
                    @endif
                    
                    @if($errors->any())
                    <div class="alert alert-success" role="alert">
                       Gagal Login
                      </div>
                    @endif

                    <form action="{{ url('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="user" placeholder="Username">
                            @error('user')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="text" class="form-control" name="password" id="sandi" placeholder="Kata Sandi">
                            @error('nama')
                            <div class="form-text">
                                {{$message}}
                            </div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <a href="dashboard" class="btn form-control btn-primary mb-2">Login</a>
                            <a href="dashboard" class="btn form-control btn-outline-success mb-2" type="reset">Batal</a>
                            {{-- <button class="btn form-control btn-primary mb-2">Login</button> --}}
                            {{-- <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button> --}}
                            <p class="text-center">Create New Account <a href="{{url('registrasi')}}">Registrasi</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>