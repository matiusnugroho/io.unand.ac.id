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
        <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">            
                
                {!! Form::open(['method' => 'POST', 'route' => ['register.international.user'], 'class' => 'form-']) !!}

                <div class="box-body">
                    @include('register.user._form')

                </div>

                <div class="box-footer">
                    {!! Form::submit(trans('Register'), ['class' => 'btn btn-danger']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
   

@endsection


@section('srcipts')

@endsection
