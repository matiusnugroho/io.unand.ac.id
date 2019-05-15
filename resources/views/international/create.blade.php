@extends('layouts.app')

@section('content-header')
    <a href="{{ route('admin.international.create') }}">Add International Student</a>
@stop

@section('breadcrumb')
    <div class="btn-group" role="group" aria-label="Button group">
        <a class="btn" href="{{ route('admin.international.index') }}"><i class="icon-list"></i> List Student </a>
    </div>
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">            
              
              {!! Form::open(['method' => 'POST', 'route' => ['admin.international.store'], 'class' => 'form-']) !!}

                <div class="box-body">
                    @include('international._form')

                </div>

                <div class="box-footer">
                    {!! Form::submit(trans('Save'), ['class' => 'btn btn-danger']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop

