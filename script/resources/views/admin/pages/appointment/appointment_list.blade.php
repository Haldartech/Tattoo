@push('styles')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.
css')}}">
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
@endpush
@extends('admin.resource.main')
@section('title', 'List Appointment')
@section('content')
{{-- <style>
    #panel{
        display: none;
    }
</style> --}}
<section class="content-header">
    {{-- Search bar start --}}
    <div class="row">
        <div class="col-md-6">
    <h1>
        @yield('title')
        {{-- <small><a href="{{url('/admin/add-gallery')}}" class="btn btn-success btn-xs btn-flat btn-sm" title="Create Gallery"><i class="fa fa-plus"></i> CREATE</a></small> --}}
    </h1>
</div>
<div class="col-md-6">
    <form action="" method="get">
        <div class="row">

        <div class="col-md-5">
            <div class="input-group">
                <input type="text" name="name" class="form-control" value="{{$request->name}}" placeholder="Enter Name">
            </div>
        </div>

        <div class="col-md-4">
            <div class="input-group">
            <input type="text" name="phone" class="form-control" value="{{$request->phone}}" placeholder="Enter Phone" >
            </div>
        </div>

        <div class="col-md-3">
            <button type="submit" class="btn btn-icon btn-circle btn-sm btn-success" title="Search"><i class="fa fa-search"></i></button>
            <a href="{{url('/admin/list-appointment')}}" class="btn btn-icon btn-circle btn-sm btn-danger" title="Reset"><i class="fa fa-sync"></i></a>
        </div>
        </div>
    </form>
</div>
</div>
{{-- Search bar end --}}
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
                        <th style="text-align: center;">Phone</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Date</th>
                        <th style="text-align: center;">Comment</th>
                        <th style="text-align: center;">Action</th>
                    </tr>
                </thead>
        <tbody>
        <?php
    $i=1;
    $datas = DB::table('appointments')
    ->where(function($query) use($request){
        if(!empty($request->name)) $query->whereRaw("name LIKE '%".$request->name."%'");
        if(!empty($request->phone)) $query->whereRaw("phone LIKE '%".$request->phone."%'");
    })
    ->orderBy('id','desc')->paginate(10);
    if(empty($request->page) || $request->page=='1'){
        $i=1;
    }else{
        $i=(10*($request->page-1))+1;
    }
    foreach ($datas as $data) {
    ?>
        <tr>
            <td style="text-align: center;">{{$i}}</td>
            <td style="text-align: center;"> {{$data->name}} </td>
            <td style="text-align: center;"> {{$data->phone}} </td>
            <td style="text-align: center;"> {{$data->email}} </td>
            <td style="text-align: center;"> {{date('d-m-Y', strtotime($data->date))}} </td>
            <td style="text-align: center;"> {{substr(strip_tags($data->comment),0,100)}} </td>
            <td style="text-align: center;">
                <form action="{{url('/admin/acceptAppointment',$data->id)}}" method="POST" style="display: inline-block;">
                    {{ csrf_field() }}
                    <input hidden name="acc_number" type="text" value="+91 {{$data->phone}}">
                    <input hidden name="acc_name" type="text" value="{{$data->name}}">
                    <button type="submit" class="btn btn-icon btn-circle btn-sm" style="background: #f1f0f0;">
                        <img src="{{url("/public/images/Appointment/accept.png")}}" alt="" width="32px" height="32px">
                    </button>
                </form>

                {{-- <form  method="POST" style="display: inline-block;">
                    {{ csrf_field() }}
                    <input hidden name="dec_number" type="text" value="+91 {{$data->phone}}">
                    <input hidden name="dec_name" type="text" value="{{$data->name}}">
                    <button type="button" class="btn btn-icon btn-circle btn-sm btn1" style="background: #f1f0f0;">
                        <img src="{{url("/public/images/Appointment/reschedule.png")}}" class="" alt="" width="32px" height="32px">
                    </button>
                </form> --}}

                <button type="button" title="Schedule Appointment" class="btn btn-icon btn-circle btn-sm" data-toggle="modal" data-target="#ScheduleModal{{$data->id}}">
                    <img src="{{url("/public/images/Appointment/reschedule.png")}}" class="" alt="" width="32px" height="32px">
                </button>

                <form action="{{url('/admin/declineAppointment',$data->id)}}" method="POST" style="display: inline-block;">
                    {{ csrf_field() }}
                    <input hidden name="dec_number" type="text" value="+91 {{$data->phone}}">
                    <input hidden name="dec_name" type="text" value="{{$data->name}}">
                    <button type="submit" class="btn btn-icon btn-circle btn-sm" style="background: #f1f0f0;">
                        <img src="{{url("/public/images/Appointment/decline.png")}}" alt="" width="32px" height="32px">
                    </button>
                </form>
            </td>
        </tr>

        <!-- ScheduleModal -->
        <form action="{{url('/admin/rescheduleAppointment',$data->id)}}" method="POST">

        <div class="modal fade" id="ScheduleModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="ScheduleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ScheduleModalLabel">Schedule Appointment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input hidden name="res_number" type="text" value="+91 {{$data->phone}}">
                        <input hidden name="res_name" type="text" value="{{$data->name}}">
                        <input hidden name="res_date" type="text" value="{{$data->date}}">
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
        <!-- ScheduleModal End -->


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
