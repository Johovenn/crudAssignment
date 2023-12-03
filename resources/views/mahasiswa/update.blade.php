<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data Mahasiswa</title>
    @include('layouts.bootstrap')
</head>
<body>
    <div class="container">
        <h2>Update Data {{ $mahasiswa->nama }}</h2>
        <form action="{{ route('mahasiswas.saveUpdate', ['id' => $mahasiswa->id]) }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id='nim' name="nim" value="{{ $mahasiswa->nim }}">
                @error('nim')
                    <div class="text-danger">{{ $message }}</div>                            
                @enderror
            </div>

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id='nama' name="nama" value="{{ $mahasiswa->nama }}">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>                            
                @enderror
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" {{ $mahasiswa->jenis_kelamin == 'L' ? 'checked' : '' }}>
                        <label class="form-check-label" for="laki_laki">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" {{ $mahasiswa->jenis_kelamin == 'P' ? 'checked' : '' }}>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                    @error('jenis_kelamin')
                        <div class="text-danger">
                            {{ $message }}
                        </div>                                
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="jurusan" class="form-control">
                    <option value="Teknik Informatika" {{ $mahasiswa->jurusan == 'Teknik Informatika' ? 'selected':'' }}>
                        Teknik Informatika
                    </option>
                    <option value="Sistem Informasi" {{ $mahasiswa->jurusan =='Sistem Informasi' ? 'selected':'' }}>
                        Sistem Informasi
                    </option>
                    <option value="Ilmu Komunikasi" {{ $mahasiswa->jurusan =='Ilmu Komunikasi' ? 'selected':'' }}>
                        Ilmu Komunikasi
                    </option>
                    <option value="Teknik Sipil" {{ $mahasiswa->jurusan =='Teknik Sipil' ? 'selected':'' }}>
                        Teknik Sipil
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="form-control">
                    {{ $mahasiswa->alamat }}
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Update</button>
        </form>
    </div>
    
</body>
</html>