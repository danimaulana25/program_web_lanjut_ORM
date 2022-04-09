<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class nilaiController extends Controller
{
    public function nilai(Mahasiswa $mahasiswa){

        $Mahasiswa = Mahasiswa::where('nim', $mahasiswa -> nim) -> first();
        // ddd($Mahasiswa -> matakuliah);
        
        return view('mahasiswa.detailNilai', [
            'mhs' => $Mahasiswa
        ]);
    }
}
