<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    @include('layouts.bootstrap')
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2>Tabel Mahasiswa</h2>
                </div>

                <table class="table tbale-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswas as $mahasiswa)
                            <tr>
                                <th>{{ $mahasiswa->id }}</th>
                                <th>{{ $mahasiswa->nim }}</th>
                                <th>{{ $mahasiswa->nama }}</th>
                                <th>{{ $mahasiswa->jenis_kelamin == 'P'?'Perempuan' : 'Laki-laki' }}</th>
                                <th>{{ $mahasiswa->jurusan }}</th>
                                <th>{{ $mahasiswa->alamat == ''?'N/A' : $mahasiswa->alamat }}</th>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>