<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            [
                'nim'=>'2041720009',
                'nama'=>'najwa syarifah',
                'kelas'=>'TI3E',
                'jurusan'=>'Akutansi',
                'email'=>'najwasyarifah25@gmail.com',
                'alamat'=>'jl. kejayan no 02 pasuruan',
                'ttl'=> '2002-03-11'
            ],
            [
                'nim'=>'2041720009',
                'nama'=>'2najwa syarifah',
                'kelas'=>'TI3E',
                'jurusan'=>'Akutansi',
                'email'=>'najwasyarifah25@gmail.com',
                'alamat'=>'jl. kejayan no 02 pasuruan',
                'ttl'=> '2002-03-11'
            ],
            [
                'nim'=>'2041720009',
                'nama'=>'3najwa syarifah',
                'kelas'=>'TI3E',
                'jurusan'=>'Akutansi',
                'email'=>'najwasyarifah25@gmail.com',
                'alamat'=>'jl. kejayan no 02 pasuruan',
                'ttl'=> '2002-03-11'
            ],
            [
                'nim'=>'2041720009',
                'nama'=>'4najwa syarifah',
                'kelas'=>'TI3E',
                'jurusan'=>'Akutansi',
                'email'=>'najwasyarifah25@gmail.com',
                'alamat'=>'jl. kejayan no 02 pasuruan',
                'ttl'=> '2002-03-11'
            ],
            [
                'nim'=>'2041720009',
                'nama'=>'5najwa syarifah',
                'kelas'=>'TI3E',
                'jurusan'=>'Akutansi',
                'email'=>'najwasyarifah25@gmail.com',
                'alamat'=>'jl. kejayan no 02 pasuruan',
                'ttl'=> '2002-03-11'
            ],
            [
                'nim'=>'2041720009',
                'nama'=>'6najwa syarifah',
                'kelas'=>'TI3E',
                'jurusan'=>'Akutansi',
                'email'=>'najwasyarifah25@gmail.com',
                'alamat'=>'jl. kejayan no 02 pasuruan',
                'ttl'=> '2002-03-11'
            ],
            [
                'nim'=>'2041720009',
                'nama'=>'7najwa syarifah',
                'kelas'=>'TI3E',
                'jurusan'=>'Akutansi',
                'email'=>'najwasyarifah25@gmail.com',
                'alamat'=>'jl. kejayan no 02 pasuruan',
                'ttl'=> '2002-03-11'
            ],
            [
                'nim'=>'2041720009',
                'nama'=>'8najwa syarifah',
                'kelas'=>'TI3E',
                'jurusan'=>'Akutansi',
                'email'=>'najwasyarifah25@gmail.com',
                'alamat'=>'jl. kejayan no 02 pasuruan',
                'ttl'=> '2002-03-11'
            ],
        ]);
    }
}
