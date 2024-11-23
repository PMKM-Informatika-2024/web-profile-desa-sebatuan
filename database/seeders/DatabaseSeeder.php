<?php

namespace Database\Seeders;

use App\Models\Profildesa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'test',
            'password' =>bcrypt('1234')
        ]);
        Profildesa::create([
            'sejarah_desa' => 'Sejarah singkat desa ini bermula dari...',
            'gambar_desa' => 'path/to/gambar-desa.jpg',
            'visi_desa' => 'Menjadi desa mandiri dan maju.',
            'misi_desa' => '1. Meningkatkan kesejahteraan masyarakat.\n2. Meningkatkan infrastruktur desa.',
            'total_jiwa' => 1500,
            'total_kk' => 350,
            'total_dusun' => 5,
            'total_rt' => 15,
            'total_melayu' => 600,
            'total_madura' => 200,
            'total_tionghoa' => 100,
            'total_dayak' => 300,
            'total_jawa' => 200,
            'total_bugis' => 50,
            'total_suku_lainnya' => 50,
            'total_islam' => 1200,
            'total_katolik' => 100,
            'total_protestan' => 100,
            'total_buddha' => 50,
            'total_hindu' => 30,
            'total_konghuchu' => 20,
            'agama' => 'Islam, Katolik, Protestan, Buddha, Hindu, Konghuchu',
            'peta_desa' => 'path/to/peta-desa.png',
        ]);
        
    }
}
