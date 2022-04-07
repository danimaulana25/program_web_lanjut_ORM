<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
use App\Models\Kelas;


class MahasiswaController extends Controller
{
    public function index()
    {
        //yang semula Mahasiswa::all, diubah menjadi with() yang menyatakan reelasi
        
        $mahasiswa = Mahasiswa::with('kelas')->get();
        $post = Mahasiswa::latest();
        if (request('search')) {
            $post->where('nama', 'like', '%' . request('search') . '%');
        }
        return view('mahasiswa.index', [
            'mahasiswa' => $mahasiswa,
            'post' => $post->paginate(3),
        ]);

    }

    public function create()
    {
        $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        return view('mahasiswa.create',['kelas' => $kelas]);
    }

    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',  
            ]);
        
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->jurusan= $request->get('jurusan');
        $mahasiswa->email= $request->get('email');
        $mahasiswa->alamat= $request->get('alamat');
        $mahasiswa->ttl= $request->get('ttl');
        $mahasiswa->save();

        $kelas = new Kelas;
        $kelas->id = $request->get('kelas');

        //fungsi eloquent untuk menambah data dengan relasi belongto
        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Mahasiswa = $mahasiswa;
        return view('mahasiswa.detail', compact('Mahasiswa'));
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Mahasiswa = $mahasiswa;
        return view('mahasiswa.edit', compact('Mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'ttl' => 'required', 
        ]);
        Mahasiswa::where('id_mahasiswa', $mahasiswa->id_mahasiswa)->update($validateData);
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diubah');
    }
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::where('id_mahasiswa', $mahasiswa->id_mahasiswa)->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
};