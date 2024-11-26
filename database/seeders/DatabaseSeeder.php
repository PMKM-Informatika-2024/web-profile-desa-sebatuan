<?php

namespace Database\Seeders;

use App\Models\Kelolakontak;
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
            'gambar_profiledesa'=>'aofinasodias.png',
            'visi_desa' => 'Menjadi desa mandiri dan maju.',
            'misi_desa' => 'Meningkatkan kesejahteraan masyarakat.',
            'total_jiwa' => 1500,
            'total_kk' => 350,
            'total_laki_laki' => 5,
            'total_perempuan' => 15,
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
            'peta_desa' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17596.69517182833!2d108.89841217452445!3d0.692050119300173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e305ab91cca753%3A0x10d868d0d0d897e3!2sSungai%20Keran%20Village%20Office!5e0!3m2!1sen!2sid!4v1728940315050!5m2!1sen!2sid" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]);
        Kelolakontak::create([
            'no_hp'=>'081234567890',
            'url_ig'=>'youhou',
            'email' =>'test@gmail.com',
            'url_fb'=>'youhou',
            'url_yt'=>'youhou',

        ]);
    }
}
