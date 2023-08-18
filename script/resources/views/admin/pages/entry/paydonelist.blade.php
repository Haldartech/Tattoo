@push('styles')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endpush
@extends('admin.resource.main')
@section('title', 'Paid List')
@section('content')
<style>
    #myImg,#myImg1,#myImg2 {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover,
#myImg1:hover,
#myImg2:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  margin-top: 200px; /* Location of the box */
  left: 5%;
  top: 0;
  width: 100%; /* Full width */
  height: 70%; /* Full height */
  overflow: hidden; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 430px;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)}
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 150px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<section class="content-header">
    <div class="row">
        <div class="col-md-8">
    <h1>
        @yield('title')
    </h1>
</h1>
</div>
<div class="col-md-4">
    <form action="" method="get">
        <div class="row">

        <div class="col-md-5" style="width: 200px">
            <div class="input-group">
                <input type="text" name="name" class="form-control" value="{{$request->name}}" required placeholder="Enter Name">
            </div>
        </div>

        <div class="col-md-4">
            <button type="submit" class="btn btn-icon btn-circle btn-sm btn-success" title="Search"><i class="fa fa-search"></i></button>
            <a href="{{url('/admin/paydone-list-entry')}}" class="btn btn-icon btn-circle btn-sm btn-danger" title="Reset"><i class="fa fa-sync"></i></a>
        </div>
        </div>
    </form>
</div>
</div>

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
                        <th style="text-align: center;">DOB</th>
                        <th style="text-align: center;">Phone</th>
                        <th style="text-align: center;">Whatsapp</th>
                        <th style="text-align: center;">Pay Done</th>
                        <th style="text-align: center;">Pre Image</th>
                        <th style="text-align: center;">Post Image</th>
                        <th style="text-align: center;">After Image</th>
                        <th style="text-align: center;">Action</th>
                    </tr>
                </thead>
        <tbody>
        <?php
    $i=1;
    $datas = DB::table('entries')
    ->where(function($query) use($request) {
        if (!empty($request->name)) {
            $query->whereRaw("name LIKE '%" . $request->name . "%'");
        }
        $query->whereNotNull('pay_done');
    })
    ->orderBy('id', 'desc')
    ->paginate(10);
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
            <td style="text-align: center; width:100px">{{date('d-m-Y', strtotime($data->dob))}}</td>
            <td style="text-align: center;">{{$data->phone}}</td>
            <td style="text-align: center;">{{$data->wp_no}}</td>
            <td style="text-align: center;">{{$data->pay_done}}</td>
            <td style="text-align: center;">
                @if(!empty($data->pre_image))
                <img src="{{url("/public/images/entry/".$data->pre_image)}}" id="myImg" alt="image" width="50px" height="50px">
                @endif
            </td>
            <td style="text-align: center;">
                @if(!empty($data->post_image))
                <img src="{{url("/public/images/entry/".$data->post_image)}}" id="myImg1" alt="image" width="50px" height="50px">
                @endif
            </td>
            <td style="text-align: center;">
                @if(!empty($data->after_image))
                <img src="{{url("/public/images/entry/".$data->after_image)}}" id="myImg2" alt="image" width="50px" height="50px">
                @endif
            </td>
            <td style="text-align: center; display:flex;">
                <a title="Edit Entry" href="{{url('/admin/edit-entry',$data->id)}}" class="btn btn-icon btn-circle btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a> &nbsp;
                <a title="Delete Entry" onclick="return confirm('Are you sure delete this item ?')" href="{{url('/admin/deleteEntry',$data->id)}}" class="btn btn-icon btn-circle btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>
</section>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var img1 = document.getElementById("myImg1");
    var img2 = document.getElementById("myImg2");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }
    img1.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }
    img2.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }


    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    </script>
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
