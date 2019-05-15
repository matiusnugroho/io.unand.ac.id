@extends('layouts.app')


@section('content-header')
    <h1>
        Role
    </h1>
@stop

@section('breadcrumb')
<li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active"><a href="{{route('admin.roles.index')}}">List Role</a></li>
@stop


@section('content')

<div class="row">
    <div class="col-lg-12">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit</h3>
            </div>

            {!! Form::model($role, ['method' => 'PUT', 'route' => ['admin.roles.update', $role->id]]) !!}

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
                    {!! Form::select('permission[]', $permissions, old('permission') ? old('permission') : $role->permissions()->pluck('name', 'name'), ['class' => 'form-control select2-multiple', 'id'=>'select2-1', 'multiple' => 'multiple']) !!}
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
