@extends('layouts.app')


@section('content-header')
    <h1>
        Permission
    </h1>
@stop


@section('breadcrumb')
<li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active"><a href="{{route('admin.permissions.index')}}">List Permission</a></li>
@stop


@section('content')

    <div class="row">
    <div class="col-lg-12">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! Form::model($permission, ['method' => 'PUT', 'route' => ['admin.permissions.update', $permission->id]]) !!}
              <div class="box-body">
                <div class="form-group">
                  {!! Form::label('name', trans('Masukkan permission')) !!}
                  {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              {!! Form::submit(trans('Edit'), ['class' => 'btn btn-danger']) !!}
              </div>
              {!! Form::close() !!}
          </div>
        </div>
    </div>
@stop

