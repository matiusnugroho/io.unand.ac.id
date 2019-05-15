@extends('layouts.topbar')

@section('content-header')
    <div class="container">
     <div class="row">

        <div class="col-sm-2">
        <img src="{{asset('pict/IO-unand.png')}}" alt="" style="width: 400px;
	    height:150px;">
        </div>

        </div>
    </div>
@endsection

@section('content')
    <div class="callout callout-success">    
     
    </div>

    <div class="row">
        <div id="geo" style="height: 600px" class="col-md-12">
            <?= $lava->render('GeoChart', 'Popularity', 'geo') ?>  
        </div>
        <div id="chart" style="height: 600px" class="col-md-12">
            <?= $lava->render('AreaChart', 'Popularity', 'chart') ?>  
        </div>
    </div>
   

@endsection


@section('srcipts')

@endsection
