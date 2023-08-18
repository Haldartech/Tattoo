@push('styles')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endpush
@extends('admin.resource.main')
@section('title', 'List Team')
@section('content')
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{url('/admin/add-team')}}" class="btn btn-success btn-xs btn-flat btn-sm" title="Create Team"><i class="fa fa-plus"></i> CREATE</a></small>
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">

            <table id="example1" class="table table-striped table-bordered border gy-4 gs-4">
                <thead>
                    <tr class="fw-bold fs-6">
                        <th style="text-align: center;">Sl No.</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Phone</th>
                        <th style="text-align: center;">Description</th>
                        <th style="text-align: center;">Image</th>
                        <th style="text-align: center;">Action</th>
                    </tr>
                </thead>
        <tbody>
        <?php
    $i=1;
    $datas = DB::table('teams')->orderBy('id','desc')->paginate(10);
    if(empty($request->page) || $request->page=='1'){
        $i=1;
    }else{
        $i=(10*($request->page-1))+1;
    }
    foreach ($datas as $data) {
    ?>
        <tr>
            <td style="text-align: center;">{{$i}}</td>
            <td style="text-align: center;">{{$data->name}}</td>
            <td style="text-align: center;">{{$data->email}}</td>
            <td style="text-align: center;">{{$data->phone}}</td>
            <td style="text-align: center;" width="380px">{{substr(strip_tags($data->desc),0,100)}}</td>
            <td style="text-align: center;">
            <img src="{{url("/public/images/team/".$data->image)}}" alt="image" width="50px" height="50px">
            </td>
            <td style="text-align: center; display:flex">
                <a title="Edit Team" href="{{url('/admin/edit-team',$data->id)}}" class="btn btn-icon btn-circle btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a>&nbsp;
                <a title="Delete Team" href="{{url('/admin/deleteTeam',$data->id)}}" class="btn btn-icon btn-circle btn-sm btn-danger" onclick="return confirm('Are you sure want to delete this item?')"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php
    $i++;
    } ?>
    </tbody>
      </table>
      {{ $datas->links() }}
    </div>
</div>
</div>
</div>
    </div>
</section>
@endsection
@push('script')
<!-- DataTables -->
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
@endpush
@push('script-write')
<script>
  $(function () {
    // $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endpush
