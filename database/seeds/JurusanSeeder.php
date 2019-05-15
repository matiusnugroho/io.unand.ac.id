<?php

use Illuminate\Database\Seeder;
use App\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = Jurusan::create(['nama' => 'Agribisnis','fakultas_id' => 1]); 
        $jurusan = Jurusan::create(['nama' => 'Agroekoteknologi','fakultas_id' => 1]); 
        $jurusan = Jurusan::create(['nama' => 'Ilmu Tanah','fakultas_id' => 1]); 
        $jurusan = Jurusan::create(['nama' => 'Teknik Pertanian','fakultas_id' => 2]); 
        $jurusan = Jurusan::create(['nama' => 'Teknologi Hasil Pertanian','fakultas_id' => 2]); 
        $jurusan = Jurusan::create(['nama' => 'Dokter','fakultas_id' => 3]); 
        $jurusan = Jurusan::create(['nama' => 'Kebidanan','fakultas_id' => 3]); 
        $jurusan = Jurusan::create(['nama' => 'Psikologi','fakultas_id' => 3]); 
        $jurusan = Jurusan::create(['nama' => 'Kedokteran Gigi','fakultas_id' => 4]);
        $jurusan = Jurusan::create(['nama' => 'Kesehatan Masyarakat','fakultas_id' => 5]);
        $jurusan = Jurusan::create(['nama' => 'Ilmu Gizi','fakultas_id' => 5]);
        $jurusan = Jurusan::create(['nama' => 'Teknik Mesin','fakultas_id' => 6]);
        $jurusan = Jurusan::create(['nama' => 'Teknik Sipil','fakultas_id' => 6]);
        $jurusan = Jurusan::create(['nama' => 'Teknik Lingkungan','fakultas_id' => 6]);
        $jurusan = Jurusan::create(['nama' => 'Teknik Industri','fakultas_id' => 6]);
        $jurusan = Jurusan::create(['nama' => 'Teknik Elektro','fakultas_id' => 6]);
        $jurusan = Jurusan::create(['nama' => 'Hukum','fakultas_id' => 7]);
        $jurusan = Jurusan::create(['nama' => 'Matematika','fakultas_id' => 8]);
        $jurusan = Jurusan::create(['nama' => 'Biologi','fakultas_id' => 8]);
        $jurusan = Jurusan::create(['nama' => 'Kimia','fakultas_id' => 8]);
        $jurusan = Jurusan::create(['nama' => 'Fisika','fakultas_id' => 8]);
        $jurusan = Jurusan::create(['nama' => 'Ilmu Management','fakultas_id' => 9]);
        $jurusan = Jurusan::create(['nama' => 'Ilmu Akutansi','fakultas_id' => 9]);
        $jurusan = Jurusan::create(['nama' => 'Ilmu Ekonomi Pembangunan','fakultas_id' => 9]);
        $jurusan = Jurusan::create(['nama' => 'D III Management','fakultas_id' => 9]); 
        $jurusan = Jurusan::create(['nama' => 'D III Akuntansi','fakultas_id' => 9]);
        $jurusan = Jurusan::create(['nama' => 'Akutansi Internasional','fakultas_id' => 9]);
        $jurusan = Jurusan::create(['nama' => 'Management Internasional','fakultas_id' => 9]);
        $jurusan = Jurusan::create(['nama' => 'Ekonomi Pembangunan','fakultas_id' => 9]);                        
        $jurusan = Jurusan::create(['nama' => 'Peternakan','fakultas_id' => 10]);
        $jurusan = Jurusan::create(['nama' => 'Ilmu Sejarah','fakultas_id' => 11]);
        $jurusan = Jurusan::create(['nama' => 'Sastra Inggris','fakultas_id' => 11]);
        $jurusan = Jurusan::create(['nama' => 'Sastra Daerah','fakultas_id' => 11]);     
        $jurusan = Jurusan::create(['nama' => 'Sastra Indonesia ','fakultas_id' => 11]);
        $jurusan = Jurusan::create(['nama' => 'Sastra Jepang','fakultas_id' => 11]);
        $jurusan = Jurusan::create(['nama' => 'Sosiologi','fakultas_id' => 12]);
        $jurusan = Jurusan::create(['nama' => 'Antropologi','fakultas_id' => 12]);
        $jurusan = Jurusan::create(['nama' => 'Ilmu Administrasi Negara','fakultas_id' => 12]);
        $jurusan = Jurusan::create(['nama' => 'Ilmu Politik','fakultas_id' => 12]);
        $jurusan = Jurusan::create(['nama' => 'Ilmu Komunikasi','fakultas_id' => 12]);
        $jurusan = Jurusan::create(['nama' => 'Ilmu Hubungan Internasional','fakultas_id' => 12]);
        $jurusan = Jurusan::create(['nama' => 'Farmasi','fakultas_id' => 13]);
        $jurusan = Jurusan::create(['nama' => 'Profesi Apoteker','fakultas_id' => 13]);
        $jurusan = Jurusan::create(['nama' => 'Keperawatan','fakultas_id' => 14]);
        $jurusan = Jurusan::create(['nama' => 'Profesi Ners','fakultas_id' => 14]);
        $jurusan = Jurusan::create(['nama' => 'Sistem Informasi','fakultas_id' => 15]);
        $jurusan = Jurusan::create(['nama' => 'Sistem Komputer','fakultas_id' => 15]);
               
        $jurusan->save();
    }
}
