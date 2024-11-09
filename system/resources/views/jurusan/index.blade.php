<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Data Jurusan</h1>
            </div>
            <div class="card-body">
                <div class="container mt-1">
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ url('jurusan/create') }}" class="btn btn-dark float-right">
                            Tambah Data
                        </a>
                    </div>

                    <!-- Tabel -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Jurusan</th>
                                <th>Nama Jurusan</th>
                                <th>Nama Kajur</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_jurusan as $jurusan)
                                <tr>
                                   <td> {{ $loop->iteration }}</td>
                                    <td>{{ $jurusan->kode_jurusan }}</td>
                                    <td>{{ $jurusan->nama_jurusan }}</td>
                                    <td>{{ $jurusan->nama_kajur }}</td>

                                    <td>
                                        <a href="{{ url('jurusan', $jurusan->jurusan_id) }}/show"
                                            class="btn btn-info">Lihat</a>
                                        <a href="{{ url('jurusan', $jurusan->jurusan_id) }}/delete"
                                            class="btn btn-danger">Hapus</a>
                                        <a href="{{ url('jurusan', $jurusan->jurusan_id) }}/edit"
                                            class="btn btn-primary">Edit</a>
                                    </td>
                                    @endforeach
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
