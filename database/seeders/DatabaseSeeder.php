<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            
            KelasSeeder::class,
            MataKuliahSeeder::class,
            MahasiswaSeeder::class,
            nilaiSeeder::class
        ]);
    }
}
