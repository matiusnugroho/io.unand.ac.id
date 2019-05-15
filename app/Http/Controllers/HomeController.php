<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\International;
use Khill\Lavacharts\Lavacharts;
use App\Unand;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $role = $user->role;
        $mahasiswa = $user->mahasiswa;
        //return dd($mahasiswa==null);
        if($role=="international"){
            $data = compact('mahasiswa','user');
        }
        return view('home.'.$role,$data);
    }

    public function index2(){
        $lava = new Lavacharts; // See note below for Laravel
        $unandPopularity = $lava->DataTable();
        $count = Unand::all()->count();
        $unandCountryTotalRaw = DB::raw('count(unand_student.country_id) as "1"');
        $dataunand = Unand::select("country.name as 0", $unandCountryTotalRaw)
                         ->join('country', 'unand_student.country_id','=','country.id')
                         ->groupBy('country.name')
                         ->get()->toArray();
        $unandPopularity->addStringColumn('Country')
                        ->addNumberColumn('Popularity')
                        ->addRows($dataunand);
		$lava->GeoChart('Popularity', $unandPopularity);
		$lava->AreaChart('Popularity', $unandPopularity);
        return view('home2',compact('lava','count'));

    }
}
