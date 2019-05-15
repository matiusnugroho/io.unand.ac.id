<?php

use Illuminate\Database\Seeder;
use App\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Fakultas = Fakultas::create(['nama' => 'Pertanian']); //id=1
        $Fakultas = Fakultas::create(['nama' => 'Teknologi Pertanian']);//id=2 
        $Fakultas = Fakultas::create(['nama' => 'Kedokteran']); //id=3
        $Fakultas = Fakultas::create(['nama' => 'Kedokteran Gigi']);//id=4
        $Fakultas = Fakultas::create(['nama' => 'Kesehatan Masyarakat']);//id=5
        $Fakultas = Fakultas::create(['nama' => 'Teknik']);//id=6
        $Fakultas = Fakultas::create(['nama' => 'Hukum']);//id=7
        $Fakultas = Fakultas::create(['nama' => 'MIPA']);//id=8
        $Fakultas = Fakultas::create(['nama' => 'Ekonomi']);//id=9
        $Fakultas = Fakultas::create(['nama' => 'Peternakan']);//id=10 
        $Fakultas = Fakultas::create(['nama' => 'Ilmu Budaya']);//id=11 
        $Fakultas = Fakultas::create(['nama' => 'Ilmu Sosial dan Ilmu Politik']);///id=12
        $Fakultas = Fakultas::create(['nama' => 'Farmasi']);//id=13
        $Fakultas = Fakultas::create(['nama' => 'Keperawatan']);//id=14
        $Fakultas = Fakultas::create(['nama' => 'Teknologi Informasi']);//id=15  
        $Fakultas->save();
    }
}
