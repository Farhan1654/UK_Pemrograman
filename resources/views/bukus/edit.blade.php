<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Edit Buku</h2>

    <form action="{{ route('bukus.update', $buku->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text"
                   name="judul"
                   class="form-control"
                   value="{{ $buku->judul }}">
        </div>

        <div class="mb-3">
            <label>Penulis</label>
            <input type="text"
                   name="penulis"
                   class="form-control"
                   value="{{ $buku->penulis }}">
        </div>

        <div class="mb-3">
            <label>Penerbit</label>
            <input type="text"
                   name="penerbit"
                   class="form-control"
                   value="{{ $buku->penerbit }}">
        </div>

        <div class="mb-3">
            <label>Tahun Terbit</label>
            <input type="number"
                   name="tahun_terbit"
                   class="form-control"
                   value="{{ $buku->tahun_terbit }}">
        </div>

        <button class="btn btn-success">
            Update
        </button>

        <a href="{{ route('bukus.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>