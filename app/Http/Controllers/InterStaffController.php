<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\Country;
use DB;

class InterStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen= DB::table('dosen')->get();
        return view('inter_staff.index', compact('dosen')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::pluck('name','id'); 
        return view('inter_staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {           
            $dosen = new Dosen();
            $dosen->nama = $request->input('name');
            $dosen->negara_asal = $request->input('country');
            $dosen->bdg_ilmu = $request->input('bdg_ilmu');
            $dosen->alamat = $request->input('address');
            $dosen->status = 2;

            if($dosen->save()){
            session()->flash('flash_success', 'Data Permission berhasil disimpan');
            }                    
            else {
                session()->flash('flash_error', 'Gagal menyimpan data permission');
            }
        } 
        catch (InvalidArgumentException $e) {
            session()->flash('flash_error', 'Terjadi kesalahan<br>'.$e->getMessage());
        }
        return redirect()->route('admin.unand_staff.index');
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
