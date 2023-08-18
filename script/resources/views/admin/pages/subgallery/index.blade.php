@push('styles')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="jquery-3.6.4.min.js"></script>
@endpush
@extends('admin.resource.main')
@section('title', 'List Subgallery')
@section('content')
<style>
    .hovereffect {
width:100%;
height:100%;
float:left;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;
}

.hovereffect .overlay {
width:100%;
height:100%;
position:absolute;
overflow:hidden;
top:0;
left:0;
opacity:0;
background-color:rgba(0,0,0,0.5);
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

.hovereffect img {
display:inline;
/* position:relative; */
-webkit-transition:all .4s linear;
transition:all .4s linear;
}

.hovereffect h2 {
text-transform:uppercase;
color:#fff;
text-align:center;
position:relative;
font-size:17px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}

.hovereffect a.info {
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
border:1px solid #fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;

}

.hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

.hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

.hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
}
.img-responsive{
    /* display: flex; */
    width: 100%;
    height: 100%;
    justify-content: center;
    align-items: center;
    background-size:cover;
}

</style>
<section class="content-header">
    <div class="row">
        <div class="col-md-6">
    <h1>
        @yield('title')
    </h1>
</div>
<div class="col-md-6">
    <form action="" method="get">
        <div class="row">

        <div class="col-md-5">
            <div class="input-group">
                <?php $categories=DB::table('categories')->orderBy('id','desc')->get(); ?>
            <select name="src_title" class="form-select" id="category" data-control="select2" data-placeholder="Select Category" required>
                <option value="" selected> </option>
                @foreach ($categories as $cat)
                <option value="{{$cat->id}}"
                    @selected($cat->id==$request->src_title)
                    >{{$cat->title}}</option>
                @endforeach
            </select>
            </div>
        </div>

        <div class="col-md-4">
            <div class="input-group">
            {{-- <input type="text" name="tag" class="form-control" value="{{$request->tag}}" > --}}
            <?php $galleries=DB::table('galleries')->orderBy('id','desc')->get(); ?>
            <select name="src_tag" class="form-select" id="galleries" data-control="select2" data-placeholder="Select Tag">
                <option value="" selected>Select Tag</option>
            </select>
            </div>
        </div>

        <div class="col-md-3">
            <button type="submit" class="btn btn-icon btn-circle btn-sm btn-success" title="Search"><i class="fa fa-search"></i></button>
            <a href="{{url('/admin/list-subgallery')}}" class="btn btn-icon btn-circle btn-sm btn-danger" title="Reset"><i class="fa fa-sync"></i></a>
        </div>
        </div>
    </form>



</div>
</div>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12" style="margin-left:45px;">
<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">

            <?php
            $i=1;
            $datas = DB::table('categories')
            ->leftJoin("galleries", "galleries.cat_id", "=", "categories.id")
            ->leftJoin("gallery_mul_imgs", "gallery_mul_imgs.gal_id", "=", "categories.id")
            ->where(function($query) use($request){
                if(!empty($request->src_title)) $query->where("cat_id",$request->src_title);
                if(!empty($request->src_tag)) $query->whereRaw("tag LIKE '%".$request->src_tag."%'");
            })
            ->orderBy('galleries.id','desc')->get();
            ?>
            @forelse ($datas as $data)
            <div class="col-md-3" style="width: 180px; height:180px; display:inline-block">
                 <div class="hovereffect">
                    <img class="img-responsive" src="{{url("/public/images/gallery/".$data->gal_mul_img)}}" alt="">
                </div>
            </div>
            @empty
            <p class="text-center">No Record Found!</p>
            @endforelse
    </div>
</div>
</div>
</div>
    </div>
</section>
<script>
    $(document).ready(function(){
        $('#category').change(function(){
            let cat_id = $(this).val();
            $.ajax({
                url: "{{url('/gettag')}}",
                type: 'post',
                data: 'cat_id='+cat_id+'&_token={{csrf_token()}}',
                success: function(result){
                    $('#galleries').html(result)
                }
            });
        });
    });
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
