@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-1 col-xs-6">
        </div>
            <div class="col-md-12 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                    <h3>{{$count}}</h3>
                    <p>International Student</p>
                    </div>
                    <div class="icon">
                    <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
    
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
