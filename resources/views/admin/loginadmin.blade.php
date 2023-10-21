</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Pengaduan</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    {{-- <style>
        #main .card{
            max-width: 400px;
        }
    </style> --}}
</head>
<body>
    <div id="main" class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px;">
                <div class="card-body">
                    <h1 class="h1">Laporkan !!</h1>
                    <h3 class="h4 mb-4 ">Selamat datang kembali</h3>
                    <form action="{{ url('admin/loginadmin') }}" method="post" class="mt-5">
                        @csrf
                        <div class="mb-3">
                            <input type="text" id="username" name="username" class="form-control py-2" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <input type="text" id="password" name="password" class="form-control py-2" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <button class="btn  btn-primary form-control btn-primary mb-2">Sign in</button>
                            <p class="text-center">Create New Account <a href="{{ url('admin/regisadmin') }}">Registrasi</a>.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>