@extends('layouts.app')

@section('content-header')
    <a href="{{ route('admin.permissions.index') }}">Permission</a>
@stop

@section('breadcrumb')
    <div class="btn-group" role="group" aria-label="Button group">
        <a class="btn" href="{{ route('admin.permissions.index') }}"><i class="icon-list"></i> List Permission </a>
    </div>
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Permission</h3>                
              
              {!! Form::open(['method' => 'POST', 'route' => ['admin.permissions.store'], 'class' => 'form-']) !!}

                <div class="box-body">

                    <div class="form-group">
                        {!! Form::label('name') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('name'))
                            <p class="help-block">
                                {{ $errors->first('name') }}
                            </p>
                        @endif
                    </div>

                </div>

                <div class="box-footer">
                    {!! Form::submit(trans('Save'), ['class' => 'btn btn-danger']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop

