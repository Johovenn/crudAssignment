<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Mahasiswa</title>
    @include('layouts.bootstrap')
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Pendaftaran Mahasiswa</h1>
                <hr>
                <form action="{{ route('mahasiswas.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id='nim' name="nim" value="{{ old('nim') }}">
                        @error('nim')
                            <div class="text-danger">{{ $message }}</div>                            
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id='nama' name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>                            
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" {{ old('jenis_kelamin')=='L' ? 'checked' : '' }}>
                                <label class="form-check-label" for="laki_laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" {{ old('jenis_kelamin')=='P' ? 'checked' : '' }}>
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
                            <option value="Teknik Informatika" {{ old('jurusan')=='Teknik Informatika' ? 'selected':'' }}>
                                Teknik Informatika
                            </option>
                            <option value="Sistem Informasi" {{ old('jurusan')=='Sistem Informasi' ? 'selected':'' }}>
                                Sistem Informasi
                            </option>
                            <option value="Ilmu Komunikasi" {{ old('jurusan')=='Ilmu Komunikasi' ? 'selected':'' }}>
                                Ilmu Komunikasi
                            </option>
                            <option value="Teknik Sipil" {{ old('jurusan')=='Teknik Sipil' ? 'selected':'' }}>
                                Teknik Sipil
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control">
                            {{ old('alamat') }}
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2"> Daftar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>