<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial CRUD pada laravel UBHI</title>
</head>
<body>
    <h2>PRAKTIKUM LARAVEL UBHI</h2>
    <h3>Data Mahasiswa</h3>
    <a href="/mahasiswa/tambah"> + Tambah Mahasiwa Baru</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach($mahasiswa as $m)
        <tr>
            <td>{{ $m->nama_mahasiswa }}</td>
            <td>{{ $m->umur_mahasiswa }}</td>
            <td>{{ $m->alamat_mahasiswa }}</td>
            <td>
                <a href="/mahasiswa/edit/{{ $m->id_mahasiswa }}">Edit</a>
                <a href="/mahasiswa/hapus/{{ $m->id_mahasiswa }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>