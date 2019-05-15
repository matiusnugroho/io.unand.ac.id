
@extends('layouts.app')

@section('content-header')
    <h1>
        Unand Student
    </h1>
@stop


@section('breadcrumb')
<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active"><a href="{{route('admin.unand.create')}}">Add Student</a></li>
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
                            <th>Universitas Tujuan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if (count($students) > 0)
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->nama }}</td>
                                        <td>{{ $student->univ_tujuan }}</td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="" class="btn btn-sm btn-success">View</a>
                                            <a href="" class="btn btn-sm btn-warning">Validasi</a>
                                           
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
                   
                }
            },'copy', 'csv', 'excel', 'pdf', 'print'
            
        ]
    });
  } );
</script>
@endsection