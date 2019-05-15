<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
Use App\International;
Use App\Fakultas;
Use App\Jurusan;
Use App\Country;
use DB;


class InternationalStudentController extends Controller
{
    public function index()
    {
        $students = $users = DB::table('mahasiswa')
        ->join('internationals', 'mahasiswa.id', '=', 'internationals.mahasiswa_id')
        ->join('country', 'internationals.country_id', '=', 'country.id')
        ->select('mahasiswa.*', 'internationals.*', 'country.*')
        ->get();

        return view('international.index', compact('students'));     
    }

    public function create()
    {
        $jurusan=DB::table('fakultas')
        ->join('jurusan', 'jurusan.fakultas_id', '=', 'fakultas.id')
        ->select('fakultas.id', 'jurusan.*')->get();    

        $fakultas = DB::table('fakultas')->get();

        $country_db = Country::all();
        $country = $country_db->pluck('name', 'id');

        return view('international.create', compact('fakultas', 'jurusan', 'country'));
    }

    public function store(Request $request)
    {

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = $request->input('name');
        $mahasiswa->gender = $request->input('gender');
        $mahasiswa->tgl_lahir = $request->input('birth');
        $mahasiswa->address = $request->input('address');
        $mahasiswa->marital_status = $request->input('marital');
        $mahasiswa->telp = $request->input('telp');           

        try {           
            if ($mahasiswa->save()) {
                $international = new International();
                $international->country_id = $request->input('country');
                $international->passport = $request->input('passport');
                $international->jurusan_id = $request->input('jurusan');
                $international->mahasiswa_id = $mahasiswa->id;
                $international->program = $request->input('program');
                $international->start_date = $request->input('tgl_mulai');
                $international->end_date = $request->input('tgl_selesai');


                if($international->save()){
                session()->flash('flash_success', 'Data Permission berhasil disimpan');
                }
                        
            } else {
                session()->flash('flash_error', 'Gagal menyimpan data permission');
            }
        } catch (InvalidArgumentException $e) {
            session()->flash('flash_error', 'Terjadi kesalahan<br>'.$e->getMessage());
        }

        return redirect()->route('admin.international.index');
    }

    public function update(Request $request, $id){
        $students = DB::table('mahasiswa')
        ->join('internationals', 'mahasiswa.id', '=', 'internationals.mahasiswa_id')
        ->select('mahasiswa.*', 'internationals.*')->where('id', $id)->first();
    }

}
