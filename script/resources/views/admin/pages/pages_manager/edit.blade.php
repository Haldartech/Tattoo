@extends('admin.resource.main')
@section('title', 'Edit Pages')
@section('content')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('summary-ckeditor' );
</script>
<section class="content-header">
    <h1>
        @yield('title')
      <small><a href="{{url('/admin/list-pages')}}" class="btn btn-warning btn-xs btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>
  </section>
  <section class="content">
    <form action="{{url('/admin/editPages',$data->id)}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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

            {{-- Title --}}
            <label class="required fw-bold fs-6 mb-2">Title</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="title" value="{{$data->title}}" readonly placeholder="Title" required style="background-color: #f6f6f6;">
            </div>

            {{-- Description --}}
            <label class="required fw-bold fs-6 mb-2">Description</label>
            <div class=" mb-5">
            <textarea class="form-control" id="kt_docs_tinymce_basic" name="desc" required>{{$data->desc}}</textarea>
            </div>

            {{-- Image --}}
            @if($data->id == 9 || $data->id == 10 || $data->id == 11)
            @else
            <label class="fw-bold fs-6 mb-2">Banner Image</label>
            <div class="input-group mb-5">
            <img src="{{url("/public/images/pages_manager/".$data->p_image)}}" alt="p_image" width="45px" height="45px">
            <input type="file" name="p_image" class="form-control">
            </div>
            @endif

        <!--end::Input group-->

        <div class="mt-8" style="float: right">
            <button type="submit" class="btn btn-primary btn-xs" id="submit">Submit</button>
          </div>

    </div>
    <!--end::Body-->
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
</section>
@endsection
