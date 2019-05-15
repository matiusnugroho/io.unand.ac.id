
@extends('layouts.app')

@section('content-header')
    <h1>
        International Staff Mobility
    </h1>
@stop


@section('breadcrumb')
<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active"><a href="{{route('admin.inter_staff.create')}}">Add Staff</a></li>
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
                            @if (count($dosen) > 0)
                                @foreach ($dosen as $dosen)
                                    @if($dosen->status == 2)
                                    <tr>
                                        <td>{{ $dosen->nama }}</td>
                                        <td>{{ $dosen->bdg_ilmu }}</td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="" class="btn btn-sm btn-success">View</a>
                                            <a href="" class="btn btn-sm btn-warning">Validasi</a>
                                           
                                        </td>

                                    </tr>
                                    @endif
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