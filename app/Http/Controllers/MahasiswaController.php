<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        
        $mahasiswas = Mahasiswa::all();

        return view('mahasiswa.index', ['mahasiswas' => $mahasiswas]);
    }

    public function create(){
        return view('form-pendaftaran');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
        ]);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $validateData['nim'];
        $mahasiswa->nama = $validateData['nama'];
        $mahasiswa->jenis_kelamin = $validateData['jenis_kelamin'];
        $mahasiswa->jurusan = $validateData['jurusan'];
        $mahasiswa->alamat = $validateData['alamat'];
        $mahasiswa->save();

        return redirect()->route("mahasiswas.index");
    }

    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);

        return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update($id){
        $mahasiswa = Mahasiswa::find($id);
    
        return view('mahasiswa.update', ['mahasiswa' => $mahasiswa]);
    }

    public function saveUpdate($id, Request $request){
        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
        ]);

        Mahasiswa::where('id', $id)->update($validateData);

        return redirect()->route("mahasiswas.index");
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::where('id', $id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswas.index');
    }
}
