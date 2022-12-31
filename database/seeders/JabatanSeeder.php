<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Jabatan::create([
            'lembaga_id' => 1,
            'posisiJabatan' => 'Kepala Desa',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);

        Jabatan::create([
            'lembaga_id' => 1,
            'posisiJabatan' => 'Sekretaris Desa',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);

        Jabatan::create([
            'lembaga_id' => 1,
            'posisiJabatan' => 'Kepala Urusan (KAUR) Keuangan',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);

        Jabatan::create([
            'lembaga_id' => 1,
            'posisiJabatan' => 'Kepala Urusan (KAUR) Tu dan Umum',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);

        Jabatan::create([
            'lembaga_id' => 1,
            'posisiJabatan' => 'Kepala Urusan (KAUR) Perencanaan',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);

        Jabatan::create([
            'lembaga_id' => 1,
            'posisiJabatan' => 'Kepala Seksi (KASI) Kesejahteraan',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);

        Jabatan::create([
            'lembaga_id' => 1,
            'posisiJabatan' => 'Kepala Seksi (KASI) Pemerintahan',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);

        Jabatan::create([
            'lembaga_id' => 1,
            'posisiJabatan' => 'Kepala Seksi (KASI) Pelayanan',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);

        Jabatan::create([
            'lembaga_id' => 1,
            'posisiJabatan' => 'Kepala Dusun (KADUS)',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);

        
        Jabatan::create([
            'lembaga_id' => 2,
            'posisiJabatan' => 'Ketua BPD',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);
        
        Jabatan::create([
            'lembaga_id' => 3,
            'posisiJabatan' => 'Ketua PKK',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);
        
        Jabatan::create([
            'lembaga_id' => 4,
            'posisiJabatan' => 'Ketua Karang Taruna',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);
        
        Jabatan::create([
            'lembaga_id' => 5,
            'posisiJabatan' => 'Ketua KUD',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);
        
        Jabatan::create([
            'lembaga_id' => 6,
            'posisiJabatan' => 'Ketua BUMDES',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);
        
        Jabatan::create([
            'lembaga_id' => 7,
            'posisiJabatan' => 'Ketua LPMD',
            'fungsiJabatan' =>'<p>a. Penyelenggaraan pemerintahan desa</p><p>b. Pelaksanaan pembangunan</p><p>c. Pembinaan kemasyarakatan</p>  <p>d. Pemberdayaan masyarakat</p><p>e. Menjaga hubungan kemitraan dengan Lembaga masyarakat dan Lembaga pemerintahan lainnya</p>'
        ]);
    }
}
