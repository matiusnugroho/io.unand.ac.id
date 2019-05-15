<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fakultas;
use App\Jurusan;
Use App\Country;
use App\Mahasiswa;
use App\International;
use App\User;
use Auth;

class RegistrationController extends Controller
{
    public function register()
    {
        return view('register.user.user');
    }
    public function registerSelfData()
    {
        $fakultas = Fakultas::pluck('nama','id');
        $jurusan = Jurusan::all();
        $country = Country::pluck('name', 'id');
        $user = Auth::user();
        return view('register.international',compact('fakultas','jurusan','country','user'));
    }
    public function registerinternationaluser(Request $r)
    {
        $user = User::create([
            'name' => $r->name,
            'email'=>$r->email,
            'password'=>bcrypt($r->password),
            'role' =>'international'
        ]);
        if($user){
            return redirect('/login')->with('sukses','Your account has been created, please login');
        }
        else{
            return "terjadi error";
        }

    }
    public function registerInternational(Request $r)
    {
        
       //return dd(Auth::user()->id);
        $savedMahasiswa = Mahasiswa::create([
           'nama' => $r->name,
           'gender' => $r->gender,
           'tgl_lahir' => $r->birth,
           'address' => $r->address,
           'marital_status' => $r->marital,
           'telp' => $r->telp,
           'user_id'=>Auth::user()->id
       ]);
       $international = new International();
       $uploaddir = 'files/'.Auth::user()->name.'/';
       $cv = $r->file_cv;
       if($cv!=null){
           $namacv = 'cv_'.$r->name.'.'.$cv->getClientOriginalExtension();
           $cv->move($uploaddir,$namacv);
           $international->file_cv = $namacv;
       }
       $passport = $r->file_passport;
       if($passport!=null){
           $namapassport = 'passport_'.$r->name.'.'.$passport->getClientOriginalExtension();
           $passport->move($uploaddir,$namapassport);
           $international->file_passport = $namapassport;
       }
       $surat_pernyataan = $r->file_surat_pernyataan;
       if($surat_pernyataan!=null){
           $namasurat_pernyataan = 'surat_pernyataan_'.$r->name.'.'.$surat_pernyataan->getClientOriginalExtension();
           $surat_pernyataan->move($uploaddir,$namasurat_pernyataan);
           $international->file_surat_pernyataan = $namasurat_pernyataan;
       }
       $photo = $r->file_photo;
       if($photo!=null){
           $namaphoto = 'photo_'.$r->name.'.'.$photo->getClientOriginalExtension();
           $photo->move($uploaddir,$namaphoto);
           $international->file_photo = $namaphoto;
       }
        
        $international->country_id = $r->country;
        $international->passport = $r->passport;
        $international->jurusan_id = $r->jurusan;
        $international->program = $r->program;
        $international->start_date = $r->tgl_mulai;
        $international->end_date = $r->tgl_selesai;
        $savedMahasiswa->international()->save($international);
        return redirect('home');
    }
}
