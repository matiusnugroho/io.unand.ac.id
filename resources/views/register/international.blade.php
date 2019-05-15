@extends('layouts.app')

@section('content')

    <div class="row">
            <div class="col-md-12 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                        <h3>Hi, {{$user->name}}</h3>
                        <p>Tell us about you</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div>
        <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">            
                
                {!! Form::open(['method' => 'POST','files'=>true, 'route' => ['register.international'], 'class' => 'form-']) !!}

                <div class="box-body">
                    @include('register._form')

                </div>

                <div class="box-footer">
                    {!! Form::submit(trans('Save'), ['class' => 'btn btn-danger']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
   

@endsection


@section('srcipts')

@endsection
