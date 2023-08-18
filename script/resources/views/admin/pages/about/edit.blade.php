@extends('admin.resource.main')
@section('title', 'Edit About')
@section('content')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('summary-ckeditor' );
</script>
<section class="content-header">
    <h1>
        @yield('title')
      <small><a href="{{url('/admin/list-about')}}" class="btn btn-warning btn-xs btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>
  </section>
  <section class="content">
    <form action="{{url('/admin/editAbout',$data->id)}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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
            <input type="text" class="form-control" name="title" value="{{$data->title}}" placeholder="Title" required>
            </div>

            {{-- Second Title --}}
            <label class="fw-bold fs-6 mb-2">Second Title <i class="fa-solid fa-circle-info" title="This title used for font style in frontend"></i></label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="sec_title" value="{{$data->sec_title}}" placeholder="Title">
            </div>

             {{-- Subtitle --}}
           <label class="fw-bold fs-6 mb-2">Subtitle</label>
           <div class="input-group mb-5">
           <input type="text" class="form-control" name="subtitle" value="{{$data->subtitle}}" placeholder="Subtitle">
           </div>

            {{-- Description --}}
            <label class="required fw-bold fs-6 mb-2">Description</label>
            <div class=" mb-5">
            <textarea class="form-control" id="kt_docs_tinymce_basic" name="desc" required>{{$data->desc}}</textarea>
            </div>

            {{-- Image --}}
            <label class="required fw-bold fs-6 mb-2">Image</label>
            <div class="input-group mb-5">
            <img src="{{url("/public/images/about/".$data->a_image)}}" alt="image" width="50px" height="43px">
            <input type="file" class="form-control" name="a_image">
            </div>

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
