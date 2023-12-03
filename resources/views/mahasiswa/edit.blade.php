<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Mahasiswa</title>
    @include('layouts.bootstrap')
</head>
<body>
    <div class="container">
        <div class="pt-3 d-flex justify-content-between">
            <h2 class="h2 mr-auto"> Biodata {{ $mahasiswa->nama }}</h2>
            <div class="d-flex justify-content-end align-items-center">
                <a href="{{ route('mahasiswas.update', ['id'=>$mahasiswa->id]) }}" class="btn btn-primary mx-3">Update</a>
                <form action="{{ route('mahasiswas.delete', ['id'=>$mahasiswa->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="container">
            <ul>
                <li>NIM : {{ $mahasiswa->nim }}</li>
                <li>Nama : {{ $mahasiswa->nama }}</li>
                <li>Jenis Kelamin : {{ $mahasiswa->jenis_kelamin=='P' ? 'Perempuan' : 'Laki-laki'}}</li>
                <li>Jurusan : {{ $mahasiswa->jurusan }}</li>
                <li>Alamat : {{ $mahasiswa->alamat=="" ? "N/A" : $mahasiswa->alamat }}</li>
            </ul>
        </div>
    </div>
</body>
</html>