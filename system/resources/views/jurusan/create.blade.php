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
        <h1>Tambah Data Jurusan</h1>
      </div>
      <div class="card-body">
        <form action="{{url('jurusan/create')}}" method="POST">
          @csrf
          <!-- Kode Jurusan -->
          <div class="mb-3">
            <label for="kode_jurusan" class="form-label">Kode Jurusan</label>
            <input type="text" class="form-control" id="kode_jurusan" name="kode_jurusan" required>
          </div>

          <!-- Nama Jurusan -->
          <div class="mb-3">
            <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
            <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" required>
          </div>

          <!-- Nama Kajur -->
          <div class="mb-3">
            <label for="nama_kajur" class="form-label">Nama Kajur</label>
            <input type="text" class="form-control" id="nama_kajur" name="nama_kajur" required>
          </div>

          <!-- Tombol Simpan -->
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
