@extends('layouts.app')

@section('content-header')
    <a href="{{ route('admin.roles.index') }}">Roles</a>
@stop

@section('breadcrumb')
<li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="{{route('admin.roles.index')}}">List role</a></li>
<li class="active"><a href="{{route('admin.roles.create')}}">Create role</a></li>
@stop

@section('content')


<div class="row">
        <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Permission</h3> 
              

            {!! Form::open(['method' => 'POST', 'route' => ['admin.roles.store']]) !!}

    

            <div class="box-body">

                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                    @endif
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('permission', 'Permissions', ['class' => 'control-label']) !!}
                    {!! Form::select('permission[]', $permissions, old('permission'), ['class' => 'form-control select2-multiple', 'id'=>'select2-1', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('permission'))
                    <p class="help-block">
                        {{ $errors->first('permission') }}
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

