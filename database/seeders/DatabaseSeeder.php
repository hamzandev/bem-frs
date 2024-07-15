<?php

namespace Database\Seeders;

use App\Models\Bidang;
use App\Models\Biro;
use App\Models\Category;
use App\Models\Departemen;
use App\Models\Jabatan;
use App\Models\Pengurus;
use App\Models\Prodi;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User
        User::factory()->create([
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        User::factory(3)->create();

        // Jabatan
        Jabatan::insert([
            [
                'jabatan' => 'Ketua',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Wakil Ketua',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Sekretaris',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Bendahara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Anggota',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Prodi
        Prodi::insert([
            [
                'prodi' => 'Teknik Informatika',
                'kaprodi' => 'Dr. John Smith',
                'detail' => 'Program studi yang mempelajari tentang teknologi informasi dan komputer.',
                'logo' => 'ti_logo.png',
                'kahim' => 'Jane Doe',
                'foto_kahim' => 'jane_doe.png',
                'website' => 'http://ti.example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'prodi' => 'Sistem Informasi',
                'kaprodi' => 'Dr. Alice Johnson',
                'detail' => 'Program studi yang mempelajari tentang sistem informasi dan manajemen data.',
                'logo' => 'si_logo.png',
                'kahim' => 'John Doe',
                'foto_kahim' => 'john_doe.png',
                'website' => 'http://si.example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'prodi' => 'Teknik Elektro',
                'kaprodi' => 'Dr. Robert Brown',
                'detail' => 'Program studi yang mempelajari tentang teknik elektro dan elektronika.',
                'logo' => 'te_logo.png',
                'kahim' => 'Alice Smith',
                'foto_kahim' => 'alice_smith.png',
                'website' => 'http://te.example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Pengurus
        \App\Models\Pengurus::insert([
            [
                'nim' => '123456789',
                'nama' => 'John Doe',
                'jabatan_id' => 1,
                'prodi_id' => 1,
                'foto' => 'john_doe.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '987654321',
                'nama' => 'Jane Smith',
                'jabatan_id' => 2,
                'prodi_id' => 2,
                'foto' => 'jane_smith.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '456789123',
                'nama' => 'Alice Johnson',
                'jabatan_id' => 3,
                'prodi_id' => 3,
                'foto' => 'alice_johnson.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '789123456',
                'nama' => 'Bob Brown',
                'jabatan_id' => 3,
                'prodi_id' => 3,
                'foto' => 'bob_brown.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '321654987',
                'nama' => 'Charlie Davis',
                'jabatan_id' => 3,
                'prodi_id' => 3,
                'foto' => 'charlie_davis.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Bidang
        Bidang::insert([
            [
                'bidang' => 'Riset & Teknologi',
                'kepala_bidang' => \App\Models\Pengurus::find(1)->id,
                'detail' => 'Bidang yang bertanggung jawab atas kegiatan riset dan teknologi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bidang' => 'Bidang Pengabdian Masyarakat',
                'kepala_bidang' => \App\Models\Pengurus::find(4)->id,
                'detail' => 'Bidang yang bertanggung jawab atas kegiatan pengabdian kepada masyarakat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Departemen
        $pengurusIds = \App\Models\Pengurus::pluck('id')->toArray();
        $kepalaBidangIds = \App\Models\Bidang::pluck('kepala_bidang')->toArray();
        $availablePengurusIds = array_diff($pengurusIds, $kepalaBidangIds);

        Departemen::insert([
            [
                'departemen' => 'Departemen Pendidikan Teknologi',
                'kepala_departemen' => array_shift($availablePengurusIds),
                'bidang_id' => \App\Models\Bidang::find(1)->id,
                'detail' => 'Departemen yang bertanggung jawab atas Pendidikan Teknologi organisasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departemen' => 'Departemen Sumber Daya Manusia',
                'kepala_departemen' => array_shift($availablePengurusIds),
                'bidang_id' => \App\Models\Bidang::find(2)->id,
                'detail' => 'Departemen yang bertanggung jawab atas pengelolaan sumber daya manusia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departemen' => 'Departemen Humas',
                'kepala_departemen' => array_shift($availablePengurusIds),
                'bidang_id' => \App\Models\Bidang::find(1)->id,
                'detail' => 'Departemen yang bertanggung jawab atas hubungan masyarakat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Biro
        Biro::insert([
            [
                'biro' => 'Biro Administrasi',
                'kepala_biro' => \App\Models\Pengurus::find(2)->id,
                'detail' => 'Biro yang bertanggung jawab atas administrasi organisasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'biro' => 'Biro Keuangan',
                'kepala_biro' => \App\Models\Pengurus::find(3)->id,
                'detail' => 'Biro yang bertanggung jawab atas keuangan organisasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'biro' => 'Biro Umum',
                'kepala_biro' => \App\Models\Pengurus::find(5)->id,
                'detail' => 'Biro yang bertanggung jawab atas urusan umum organisasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Categories
        Category::insert([
            [
                'category' => 'Technology',
                'slug' => 'technology',
                'detail' => 'All about the latest in technology.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Health',
                'slug' => 'health',
                'detail' => 'Health tips and news.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Education',
                'slug' => 'education',
                'detail' => 'Educational resources and news.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Finance',
                'slug' => 'finance',
                'detail' => 'Financial advice and updates.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Entertainment',
                'slug' => 'entertainment',
                'detail' => 'Latest in movies, music, and more.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Aspirasi Category
        \App\Models\AspirasiCategory::insert([
            [
                'category' => 'Kinerja BEM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Fasilitas Kampus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Laporan Dosen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Kabinet
        \App\Models\Kabinet::insert([
            [
                'kabinet' => 'Kabinet 1',
                'periode' => '2022-2025',
                'logo' => 'logo_kabinet_1.png',
                'detail' => 'Detail of Kabinet 1.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kabinet' => 'Kabinet 2',
                'periode' => '2025-2028',
                'logo' => 'logo_kabinet_2.png',
                'detail' => 'Detail of Kabinet 2.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kabinet' => 'Kabinet 3',
                'periode' => '2028-2031',
                'logo' => 'logo_kabinet_3.png',
                'detail' => 'Detail of Kabinet 3.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        /** Pengurus Detail **/
        \App\Models\PengurusDetail::insert([
            [
                'pengurus_id' => Pengurus::find(1)->id,
                'kabinet_id' => 1,
                'biro_id' => 1,
                'departemen_id' => null,
                'telepon' => '081234567890',
                'tanggal_lahir' => '1990-01-01',
                'alamat' => 'Jl. Merdeka No. 1',
                'gender' => 'L',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pengurus_id' => Pengurus::find(2)->id,
                'kabinet_id' => 1,
                'biro_id' => 2,
                'departemen_id' => null,
                'telepon' => '081234567891',
                'tanggal_lahir' => '1991-02-02',
                'alamat' => 'Jl. Merdeka No. 2',
                'gender' => 'P',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pengurus_id' => Pengurus::find(3)->id,
                'kabinet_id' => 1,
                'biro_id' => null,
                'departemen_id' => 1,
                'telepon' => '081234567892',
                'tanggal_lahir' => '1992-03-03',
                'alamat' => 'Jl. Merdeka No. 3',
                'gender' => 'P',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
