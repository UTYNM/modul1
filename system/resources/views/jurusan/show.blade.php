<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Data Jurusan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h1>Detail Data Jurusan</h1>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <label for="kode_jurusan" class="form-label">Kode Jurusan</label>
         <h5> {{$detail->kode_jurusan}}</h5>
        </div>

        <div class="mb-3">
          <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
          <h5> {{$detail->nama_jurusan}}</h5>
        </div>

        <div class="mb-3">
          <label for="nama_kajur" class="form-label">Nama Kajur</label>
          <h5> {{$detail->nama_kajur}}</h5>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
