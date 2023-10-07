<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div id="min" class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px;">
                <div class="card-body">
                    <h4 class="h4">Daftrarkan diri anda</h4>
                    
                    @if(session('pesan'))
                    <div class="alert alert-success" role="alert">
                       {{session('pesan')}} 
                      </div>
                    @endif
                    
                    @if($errors->any())
                    <div class="alert alert-success" role="alert">
                       Gagal Regi3sxsstrasi 
                      </div>
                    @endif

                    <form action="{{ url('ol') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nik" class="form-label">Nik</label>
                            <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik">
                            @error('nik')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                            @error('nama')
                            <div class="form-text">
                                {{$message}}
                            </div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            @error('username')
                            <div class="form-text">
                                {{$message}}
                            </div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                            @error('password')
                            <div class="form-text">
                                {{$message}}
                            </div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="telp" class="form-label">No Telepon</label>
                            <input type="number" class="form-control" name="telp" id="telp" placeholder="No Telpon">
                            @error('telp')
                            <div class="form-text">
                                {{$message}}
                            </div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn form-control btn-primary mb-2">Registrasi</button>
                            <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                            <p class="text-center">already have account sign in <a href="{{url('login')}}">login</a>.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>