
@extends('layouts.app')

@section('content-header')
    <h1>
        Permission
    </h1>
@stop


@section('breadcrumb')
<li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active"><a href="{{route('admin.permissions.create')}}">Permission</a></li>
@stop


@section('content')

    <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title"></h3>
                    <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                       <caption>List Permission</caption>
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if (count($permissions) > 0)
                                @foreach ($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->name }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.permissions.edit',[$permission->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                            {!! Form::open(array(
                                                'style' => 'display: inline-block;',
                                                'method' => 'DELETE',
                                                'onsubmit' => "return confirm('".trans("Are You Sure ?")."');",
                                                'route' => ['admin.permissions.destroy', $permission->id])) !!}
                                            {!! Form::submit(trans('Delete'), array('class' => 'btn btn-sm btn-danger')) !!}
                                            {!! Form::close() !!}
                                        </td>

                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="2">@lang('global.app_no_entries_in_table')</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
            </div>
    </div>

@stop

@section('scripts')
<script>
  $(document).ready(function() {
    $('#example2').DataTable({
        
        dom: 'Bfrtlip',
        buttons: [
            {
                text: 'Tambah Data',
                action: function ( e, dt, node, config ) {
                    window.location.assign('{{route("admin.permissions.create")}}');
                }
            },'copy', 'csv', 'excel', 'pdf', 'print'
            
        ]
    });
  } );
</script>
@endsection