@inject('request', 'Illuminate\Http\Request')

@extends('layouts.app')

@section('content-header')
    <h1 class="breadcrumb-item">Users</h1>
@stop

@section('breadcrumb')
    <div class="btn-group" role="group" aria-label="Button group">
        <a class="btn" href="{{ route('admin.users.create') }}"><i class="icon-plus"></i> Add New User </a>
    </div>
@stop

@section('content')


    <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title"></h3>
                        <div class="box-body">
                            <table  id="example2" class="table table-hover table-outline">
                                <thead class="thead-default">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>&nbsp;</th>

                                        </tr>
                        </thead>

                    <tbody>
                        @if (count($users) > 0)
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <h5>
                                        @foreach ($user->roles()->pluck('name') as $role)
                                            <span class="badge badge-primary">{{ $role }}</span>
                                        @endforeach
                                        </h5>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.users.edit',[$user->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                        {!! Form::open(array(
                                            'style' => 'display: inline-block;',
                                            'method' => 'DELETE',
                                            'onsubmit' => "return confirm('".trans("Are you sure ?>")."');",
                                            'route' => ['admin.users.destroy', $user->id])) !!}
                                        {!! Form::submit(trans('Delete'), array('class' => 'btn btn-sm btn-danger')) !!}
                                        {!! Form::close() !!}
                                    </td>

                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="9">@lang('global.app_no_entries_in_table')</td>
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