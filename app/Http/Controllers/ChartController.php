<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\International;
use App\Unand;
use Illuminate\Support\Arr;
use DB;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lava = new Lavacharts; // See note below for Laravel

		$internationalPopularity = $lava->DataTable();

        $internationalCountryTotalRaw = DB::raw('count(internationals.country_id) as "1"');
        $dataInternational = International::select("country.name as 0", $internationalCountryTotalRaw)
                         ->join('country', 'internationals.country_id','=','country.id')
                         ->groupBy('country.name')
                         ->get()->toArray();
     
		$internationalPopularity->addStringColumn('Country')
		           ->addNumberColumn('Popularity')
                   ->addRows($dataInternational);

		$lava->GeoChart('Popularity', $internationalPopularity);
		$lava->AreaChart('Popularity', $internationalPopularity);
        return view('dashboard.index',compact('lava'));
    }

    public function index2(){
        $lava = new Lavacharts; // See note below for Laravel
		$unandPopularity = $lava->DataTable();
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
        return view('dashboard.index',compact('lava'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
