@extends('layouts.app')

@section('content-header')
    <a href="{{ route('admin.inter_staff.create') }}">Add Intenatonal Staff</a>
@stop

@section('breadcrumb')
    <div class="btn-group" role="group" aria-label="Button group">
        <a class="btn" href="{{ route('admin.inter_staff.index') }}"><i class="icon-list"></i> List Staff </a>
    </div>
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">            
              
              {!! Form::open(['method' => 'POST', 'route' => ['admin.inter_staff.store'], 'class' => 'form-']) !!}

                <div class="box-body">
                    @include('inter_staff._form')

                </div>

                <div class="box-footer">
                    {!! Form::submit(trans('Save'), ['class' => 'btn btn-danger']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop

