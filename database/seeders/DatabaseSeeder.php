<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\GeneralSetting;
use App\Models\HubunganKeluarga;
use App\Models\Jabatan;
use App\Models\JenisDiklat;
use App\Models\Kegiatan;
use App\Models\peran;
use App\Models\Presensi;
use App\Models\TimKegiatan;
use App\Models\TingkatPendidikan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Jabatan::create([
            'nama_jabatan' => 'Admin',
        ]);

        Jabatan::create([
            'nama_jabatan' => 'kadiv',
        ]);

        Jabatan::create([
            'nama_jabatan' => 'dda',
        ]);

        Jabatan::create([
            'nama_jabatan' => 'staf',
        ]);

        Jabatan::create([
            'nama_jabatan' => 'ppk',
        ]);

        Jabatan::create([
            'nama_jabatan' => 'bod',
        ]);

        TingkatPendidikan::create([
            'nama_tingkat_pendidikan' => 'Sarjana',
        ]);

        TingkatPendidikan::create([
            'nama_tingkat_pendidikan' => 'Magister',
        ]);

        TingkatPendidikan::create([
            'nama_tingkat_pendidikan' => 'Doktor',
        ]);

        JenisDiklat::create([
            'nama_jenis_diklat' => 'Diklat kepemimpinan',
        ]);

        JenisDiklat::create([
            'nama_jenis_diklat' => 'Diklat Fungsional',
        ]);

        JenisDiklat::create([
            'nama_jenis_diklat' => 'Diklat Teknis',
        ]);

        HubunganKeluarga::create([
            'urutan' => '1',
            'nama' => 'Ibu',
        ]);

        HubunganKeluarga::create([
            'urutan' => '2',
            'nama' => 'Ayah',
        ]);

        HubunganKeluarga::create([
            'urutan' => '3',
            'nama' => 'Anak Kandung',
        ]);

        peran::create([
            'nama_peran' => 'Pembawa Acara',
        ]);

        peran::create([
            'nama_peran' => 'Panitia',
        ]);

        User::create([
            'nama_pegawai' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '12345678',
            '_password_' => '12345678',
            'level' => 'admin',
            'kode_finger' => '989898',
            'id_jabatan' => '1',
            'is_deleted' => '0',
            'kode_finger' => '88121'
        ]);

        User::create([
            'nama_pegawai' => 'kadiv',
            'email' => 'kadiv@kadiv.com',
            'password' => '12345678',
            '_password_' => '12345678',
            'level' => 'Kadiv',
            'kode_finger' => '989898',
            'id_jabatan' => '2',
            'is_deleted' => '0',
        ]);

        User::create([
            'nama_pegawai' => 'bod',
            'email' => 'bod@bod.com',
            'password' => '12345678',
            '_password_' => '12345678',
            'level' => 'bod',
            'kode_finger' => '919898',
            'id_jabatan' => '6',
            'is_deleted' => '0',
        ]);

        
        User::create([
            'nama_pegawai' => 'ppk',
            'email' => 'ppk@ppk.com',
            'password' => '12345678',
            '_password_' => '12345678',
            'level' => 'ppk',
            'kode_finger' => '983898',
            'id_jabatan' => '6',
            'is_deleted' => '0',

        ]);

        User::create([
            'nama_pegawai' => 'kevin',
            'email' => 'kevin@gmail.com',
            'password' => '12345678',
            '_password_' => '12345678',
            'level' => 'staf',
            'kode_finger' => '545621',
            'id_jabatan' => '4',
            'is_deleted' => '0',
            'kode_finger' => '82121'
        ]);

        // GeneralSetting::create([
        //     'tahun_aktif' => '2023',
        //     'id_users' => null,
        //     'status' => '0',
        // ]);

        User::factory(10)->create();
        Kegiatan::factory(40)->create();
        TimKegiatan::factory(40)->create();
        // Presensi::factory(100)->create();
    }
}