@extends('admin.resource.main')
@section('title', 'Edit Blog')
@section('content')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('summary-ckeditor' );
</script>
<section class="content-header">
    <h1>
        @yield('title')
      <small><a href="{{url('/admin/list-blog')}}" class="btn btn-warning btn-xs btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>
  </section>
  <section class="content">
    <form action="{{url('/admin/editBlog',$data->id)}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
        {{-- <input type="hidden" name="_method" value="PATCH"> --}}
        {{ csrf_field() }}
  <!--begin::Row-->
  <div class="row gy-5 g-xl-8">
    <div class="col-xl-12">
      <!-- general form elements -->
      <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 bg-danger mb-5" style="min-height: 40px;">
            <h3 class="card-title fw-bolder text-white">@yield('title') </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body p-0">
              <!--begin::Input group-->

            {{-- Blog Title --}}
            <label class="required fw-bold fs-6 mb-2">Blog Title</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="blog_title" value="{{$data->blog_title}}" placeholder="Blog Title" required>
            </div>

            {{-- Short Description --}}
            <label class="required fw-bold fs-6 mb-2">Short Description</label>
            <div class=" mb-5">
            <textarea class="form-control" id="kt_docs_tinymce_basic" name="shrt_desc" required>{{$data->shrt_desc}}</textarea>
            </div>

            {{-- Long Description --}}
            <label class="required fw-bold fs-6 mb-2">Long Description</label>
            <div class=" mb-5">
            <textarea class="form-control" id="kt_docs_tinymce_basic1" name="long_desc" required>{{$data->long_desc}}</textarea>
            </div>

             {{-- Blog Image --}}
             <label class="fw-bold fs-6 mb-2">Blog Image</label>
             <div class="input-group mb-5">
                <img src="{{url("/public/images/blog/".$data->blog_image)}}" alt="blog_image" width="50px" height="43px">
                 <input type="file" class="form-control" name="blog_image">
             </div>


             {{-- Blog Multiple image --}}
             <?php $blog_imgs = DB::table('blog_mul_images')->where("b_id",$data->id)->get();
                foreach ($blog_imgs as $blog_img) {
            ?>
            <img src="{{url('public/images/blogmul/'.$blog_img->blog_mul_image)}}" alt="blog_mul_image" id="img{{ $blog_img->id }}" style="width: 50px; height: 50px;">
            <a title="Delete" class="btn btn-icon btn-circle btn-danger btn-sm" id="remv{{ $blog_img->id }}" onclick="productdeleteimage('{{ $blog_img->id }}');"><i class="fa fa-times" aria-hidden="true"></i></a>
            <?php } ?><br>
            <label class="fw-bold fs-6 mb-2">Blog Multiple Image</label>
            <div class="input-group mb-5">
                <input type="file" class="form-control" name="blog_mul_image[]" multiple>
            </div>

        <!--end::Input group-->
    </div>
    <!--end::Body-->
</div>
<div class="mt-8" style="float: right">
    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
  </div>
</div>
</div>
<!--end::Row-->
</form>
<script>
    CKEDITOR.replace( 'kt_docs_tinymce_basic',
    {
    customConfig : 'config.js',
    toolbar : 'simple'
    })
</script>

<script>
    CKEDITOR.replace( 'kt_docs_tinymce_basic1',
    {
    customConfig : 'config.js',
    toolbar : 'simple'
    })
</script>

<script>
    function productdeleteimage(id)
{
        if (confirm("Do you realy want to delete this record?")) {
            // alert(id);
            $.ajax({
                url: "{{ url('/ajaxBlogImageDelete') }}" + '/' + id,
                type: 'DELETE'
                , data: {
                    _token: $("input[name=_token]").val()
                }
                , success: function(response) {
                    $("#img" + id).remove();
                    $("#remv" + id).remove();
                }
            });

        }
    }
</script>
</section>
@endsection
