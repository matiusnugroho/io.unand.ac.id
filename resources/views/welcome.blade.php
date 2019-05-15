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
    <div class="callout callout-info">
    </div>
      
        <div id="pop-div" style="border:1px solid black"></div>
        <?= $lava->render('GeoChart', 'Popularity', 'pop-div') ?>  

   

@endsection


@section('srcipts')

@endsection
