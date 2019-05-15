
@extends('layouts.app')

@section('content-header')
    <h1>
        Role
    </h1>
@stop


@section('breadcrumb')
<li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active"><a href="{{route('admin.roles.create')}}">Role</a></li>
@stop


@section('content')
<div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title"></h3>
                    <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                       <caption>Role</caption>
                    <thead class="thead-default">
                    <tr>
                        <th>Name</th>
                        <th>Permission</th>
                        <th class="text-center">&nbsp;</th>
                    </tr>
                    </thead>
                     <tbody>
                    @if (count($roles) > 0)
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <h5>
                                    @foreach ($role->permissions()->pluck('name') as $permission)
                                        <span class="badge badge-lg badge-primary">{{ $permission }}</span>
                                    @endforeach
                                    </h5>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.roles.edit',[$role->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('Are You Sure ?');",
                                        'route' => ['admin.roles.destroy', $role->id])) !!}
                                    {!! Form::submit(trans('Delete'), array('class' => 'btn btn-sm btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">Data Kosong</td>
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

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('admin.roles.mass_destroy') }}';
    </script>
@endsection


@section('scripts')
<script>
  $(document).ready(function() {
    $('#example2').DataTable({
        
        dom: 'Bfrtlip',
        buttons: [
            {
                text: 'Tambah Data',
                action: function ( e, dt, node, config ) {
                    window.location.assign('{{route("admin.roles.create")}}');
                }
            },'copy', 'csv', 'excel', 'pdf', 'print'
            
        ]
    });
  } );
</script>
@endsection