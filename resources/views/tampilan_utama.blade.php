<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>





    {{-- form pengaduan --}}
    <div class="container pt-5 my-4">
        <div class="card" style="width: 90%; ">
            <h5 class="card-header"></h5>
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">LAPORAN</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Isi Laporan</th>
                            <th scope="col">lokasi</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Wisnu</td>
                            <td>03 Desember 2023</td>
                            <td>Kehilangan Motor</td>
                            <td>Depan Jl Kopi No 2</td>
                            <td>Proses</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Raden</td>
                            <td>07 Desember 2023</td>
                            <td>Kehilangan Ktp</td>
                            <td>Sadang No 2</td>
                            <td>Di Proses</td>
                        </tr>  
                        <tr>
                            <th scope="row">3</th>
                            <td>Nanda</td>
                            <td>22 January 2023</td>
                            <td>Pembunuhan</td>
                            <td>Ciwareng</td>
                            <td>Selesai</td>
                        </tr>
                    </tbody>
                </table>
                <a href="tambah" class="btn btn-primary">tambah</a>
            </div>
        </div>
    </div>


</body>

</html>
