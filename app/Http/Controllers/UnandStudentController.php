<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
Use App\Unand;
Use App\Fakultas;
Use App\Jurusan;
Use App\Country;
use DB;

class UnandStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = $users = DB::table('mahasiswa')
        ->join('unand_student', 'mahasiswa.id', '=', 'unand_student.mahasiswa_id')
        ->select('mahasiswa.*', 'unand_student.*')
        ->get();

        return view('unand.index', compact('students'));     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan=DB::table('fakultas')
        ->join('jurusan', 'jurusan.fakultas_id', '=', 'fakultas.id')
        ->select('fakultas.id', 'jurusan.*')->get();    

        $fakultas = DB::table('fakultas')->get();

        $country_db = Country::all();
        $country = $country_db->pluck('name', 'id');

        return view('unand.create', compact('fakultas', 'jurusan', 'country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
                $unand = new Unand();
                $unand->NIM = $request->input('nim');
                $unand->jurusan_id = $request->input('jurusan');
                $unand->country_id = $request->input('country');
                $unand->univ_tujuan = $request->input('univ');
                $unand->paspor = $request->input('passport');
                $unand->prodi = $request->input('prodi');
                $unand->mahasiswa_id = $mahasiswa->id;
                $unand->program = $request->input('program');
                $unand->tgl_mulai = $request->input('tgl_mulai');
                $unand->tgl_akhir = $request->input('tgl_akhir');


                if($unand->save()){
                session()->flash('flash_success', 'Data Permission berhasil disimpan');
                }
                        
            } else {
                session()->flash('flash_error', 'Gagal menyimpan data permission');
            }
        } catch (InvalidArgumentException $e) {
            session()->flash('flash_error', 'Terjadi kesalahan<br>'.$e->getMessage());
        }

        return redirect()->route('admin.unand.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
