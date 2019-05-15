@extends('layouts.international_base')

@section('content')
<div class="row">
@if($mahasiswa==null)
    <div class="col-md-12 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
            <h3>Hi, {{$user->name}}</h3>
            <p>it seems your data is incomplete</p>
            </div>
            <div class="icon">
            <i class="fa fa-users"></i>
            </div>
            <a href="{{route('international.setdata')}}" class="small-box-footer">
            Complete now <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
@else
<div class="col-md-12 col-xs-6">
    <h1>Data diri di sini</h1>
</div>
@endif
</div>
    


@endsection
