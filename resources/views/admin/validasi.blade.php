<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     {{-- navbar --}}
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">validasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Tanggapan</a>
                </li>
              <div class="container-fluid">
                <form class="d-flex" role="search">
                </form>
              </div>
            </ul>
          </div>
        </div>
      </nav> 

      {{-- body --}}
      <div class="contrainer">
        <div class="card shadow">
            <div class="card-header teks-bg-white">
                <h4 class="h4 card-title">
                    Data Laporan Masyarakat
                </h4>
                <div class="card-body">
                    <table id="tb_validasi" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik</th>
                                <th>Tanggal Pengaduan</th>
                                <th>Isi Laporan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id_pengaduan }}</td>
                                    <td>{{ $item->nik }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>






</body>
</html>