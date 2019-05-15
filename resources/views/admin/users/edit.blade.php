@extends('layouts.app')

@section('content-header')
    <h1> <a href="{{ route('admin.users.index') }}">Roles</a></h1>
@stop

@section('breadcrumb')
    <div class="btn-group" role="group" aria-label="Button group">
        <a class="btn" href="{{ route('admin.users.index') }}"><i class="icon-list"></i> Users Index </a>
    </div>
@stop

@section('content')

<div class="row">
    <div class="col-lg-12">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit</h3>
            </div>

                {!! Form::model($user, ['method' => 'PUT', 'route' => ['admin.users.update', $user->id]]) !!}

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
                        {!! Form::label('email', 'Email*', ['class' => 'control-label']) !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                        @endif
                    </div>

                    <div class="col-xs-12 form-group">
                        {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                        @endif
                    </div>

                    <div class="col-xs-12 form-group">
                        {!! Form::label('roles', 'Roles*', ['class' => 'control-label']) !!}
                        {!! Form::select('roles[]', $roles, old('roles') ? old('role') : $user->roles()->pluck('name', 'name'), ['class' => 'form-control select2-multiple', 'multiple' => 'multiple', 'required' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('roles'))
                        <p class="help-block">
                            {{ $errors->first('roles') }}
                        </p>
                        @endif
                    </div>
                </div>

                <div class="box-footer">
                    {!! Form::submit(trans('Update'), ['class' => 'btn btn-danger']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop

