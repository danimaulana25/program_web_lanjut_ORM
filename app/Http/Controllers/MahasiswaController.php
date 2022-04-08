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
            'kelas_id' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',  
            ]);
        
        //  $mahasiswa = new Mahasiwa;
        //  $mahasiswa->nim=$request->get('nim');
        //  $mahasiswa->nama=$request->get('nama');
        //  $mahasiswa->jurusan=$request->get('jurusan');
        //  $mahasiswa->email=$request->get('email');
        //  $mahasiswa->alamat=$request->get('alamat');
        //  $mahasiswa->tanggal_lahir=$request->get('tanggal_lahir');
        //  $mahasiswa->save();
        
        //  $kelas = new Kelas;
        //  $kelas->id=$request->get('kelas_id');

        // //fungsi eloquent untuk menambah data
        //  $mahasiswa->kelas()->associate($kelas);
        //  $mahasiswa->save();

        // Mahasiswa::create($request->all());
        // dd($request->all());
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas_id' => $request->kelas_id,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl, 
            ]);            

         //jika data berhasil ditambahkan, akan kembali ke halaman utama
         return redirect()->route('mahasiswa.index')
         ->with('success', 'Mahasiswa Berhasil Ditambahkan');

    }

    public function show($nim)
    {
        //code sebelum dibuat relasi -->>$mahasiswa = Mahasiswa::find($nim)
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $mahasiswa = Mahasiswa::with('kelas')->where('nim', $nim)->first();
        return view('mahasiswa.detail', ['Mahasiswa' => $mahasiswa]);
    }

    public function edit($nim)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $mahasiswa = Mahasiswa::with('kelas')->where('Nim', $nim)->first();
        $kelas = kelas::all(); //mendapatkan data dari table kelas)
        return view('mahasiswa.edit', compact('mahasiswa', 'kelas'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas_id' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'ttl' => 'required', 
        ]);
        Mahasiswa::where('id_mahasiswa',$mahasiswa->id_mahasiswa)->update($validateData);          

         //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')
        ->with('success', 'Mahasiswa Berhasil Ditambahkan');
        
    }
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::where('id_mahasiswa', $mahasiswa->id_mahasiswa)->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
};