<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\Pengganti;
use App\Models\Tugas;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            // 'email_verified_at' => now(),
            'role' => 'admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => str::random(10),
        ]);
        User::factory(17)->create();

        Mahasiswa::factory(9)->create();
        Dosen::factory(8)->create();

        Matkul::create([
            'kd_matkul' => 'PB-011103',
            'nama_matkul' => "Bahasa Indonesia 2",
            'nip' => 111
        ]);
        Matkul::create([
            'kd_matkul' => 'AK-011305',
            'nama_matkul' => "Interaksi Manusia dan Komputer",
            'nip' => 112
        ]);
        Matkul::create([
            'kd_matkul' => 'IT-011234',
            'nama_matkul' => "Konsep Data Mining",
            'nip' => 113
        ]);

        Jadwal::create([
            'hari' => 'senin',
            'waktu' => '1/2',
            'ruang' => 'E318',
            'kd_matkul' => 'PB-011103'
        ]);
        Jadwal::create([
            'hari' => 'senin',
            'waktu' => '4/5/6',
            'ruang' => 'E317',
            'kd_matkul' => 'AK-011305'
        ]);
        Jadwal::create([
            'hari' => 'senin',
            'waktu' => '9/10',
            'ruang' => 'E317',
            'kd_matkul' => 'IT-011234'
        ]);

        Pengganti::create([
            'hari' => 'Sabtu',
            'waktu' => '1/2',
            'ruang' => 'E317',
            'kd_matkul' => 'IT-011234'
        ]);

        Tugas::create([
            'kd_matkul' => 'AK-011305',
            'judul' => 'Project Besar',
            'deskripsi' => 'Pokoknya projectnya gede aja',
            'tautan' => 'kosong',
        ]);

    }
}
