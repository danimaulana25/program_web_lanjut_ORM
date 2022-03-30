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
                'nim'=>'2041720001',
                'nama'=>'Ahmad Dani Maulana',
                'kelas'=>'TI2E',
                'jurusan'=>'Teknologi Informasi',
                'email'=>'Ahmaddani25@gmail.com',
                'alamat'=>'jl. karangsentul no 02 kabupaten pasuruan',
                'ttl'=> '2002-02-25'
            ],
            [
                'nim'=>'2041720002',
                'nama'=>'Najwa Syarifah',
                'kelas'=>'TI3E',
                'jurusan'=>'Akutansi',
                'email'=>'najwasyarifah5@gmail.com',
                'alamat'=>'jl. kejayan no 02 kec kraton',
                'ttl'=> '2002-03-11'
            ],
            [
                'nim'=>'2041720003',
                'nama'=>'Alaika Rohman',
                'kelas'=>'TI3E',
                'jurusan'=>'Teknik Mesin',
                'email'=>'alaikarohman15@gmail.com',
                'alamat'=>'Jl Masjid Darussalam 15, Dki Jakarta',
                'ttl'=> '2003-03-24'
            ],
            [
                'nim'=>'2041720004',
                'nama'=>'Adi Sasono',
                'kelas'=>'TI4E',
                'jurusan'=>'Teknik Sipil',
                'email'=>'adisasono25@gmail.com',
                'alamat'=>'Jl Tarumanegara 17, Dki Jakarta',
                'ttl'=> '2004-05-21'
            ],
            [
                'nim'=>'2041720005',
                'nama'=>'Agus Tjandra',
                'kelas'=>'TI3E',
                'jurusan'=>'Teknik Elektro',
                'email'=>'agustjandra25@gmail.com',
                'alamat'=>'Jl Bahari Gg 2/32, Dki Jakarta',
                'ttl'=> '2001-01-11'
            ],
            [
                'nim'=>'2041720006',
                'nama'=>'Amy Delia',
                'kelas'=>'TI3E',
                'jurusan'=>'Akutansi',
                'email'=>'amydelia25@gmail.com',
                'alamat'=>'Psr Rawa Bening Aloo CKS/88-89, Dki Jakarta',
                'ttl'=> '2002-03-11'
            ],
            [
                'nim'=>'2041720007',
                'nama'=>'Bayu Prawitasari',
                'kelas'=>'TI3E',
                'jurusan'=>'Teknologi Informasi',
                'email'=>'bayuprawitasari12@gmail.com',
                'alamat'=>'Jl Cempaka Putih Tgh II Bl C/15, Dki Jakarta',
                'ttl'=> '2000-11-11'
            ],
            [
                'nim'=>'2041720008',
                'nama'=>'Charlie Kasim',
                'kelas'=>'TI3E',
                'jurusan'=>'Manjaemen',
                'email'=>'charliekasim225@gmail.com',
                'alamat'=>'Jl Cipaganti 165-167, Jawa Barat',
                'ttl'=> '2002-03-11'
            ],
            [
                'nim'=>'2041720008',
                'nama'=>'Denny Rahardja',
                'kelas'=>'TI3E',
                'jurusan'=>'Teknologi Informasi',
                'email'=>'dennyrahardjah10@gmail.com',
                'alamat'=>'Jl Cipaganti 165-167, Jawa Barat',
                'ttl'=> '2003-08-08'
            ],
        ]);
    }
}
