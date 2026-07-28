<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Daftar Buku</h2>

    <a href="{{ route('bukus.create') }}" class="btn btn-primary mb-3">
        Tambah Buku
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($bukus as $buku)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ $buku->penerbit }}</td>
                <td>{{ $buku->tahun_terbit }}</td>

                <td>
                    <a href="{{ route('bukus.edit', $buku->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>
                </td>

            </tr>

        @empty

            <tr>
                <td colspan="6" class="text-center">
                    Belum ada data buku.
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

</body>
</html>