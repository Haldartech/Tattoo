@extends('admin.resource.main')
@section('title', 'Add Service')
@section('content')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('summary-ckeditor' );
</script>
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{url('/admin/list-service')}}" class="btn btn-warning btn-xs btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>
  </section>
  <section class="content">
    <form action="{{url('/admin/addService')}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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
            <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title" required>
            </div>

            {{-- Short Description --}}
            <label class="required fw-bold fs-6 mb-2">Short Description</label>
            <div class=" mb-5">
            <textarea class="form-control" id="kt_docs_tinymce_basic" name="shrt_desc" required>{{old('shrt_desc')}}</textarea>
            </div>

            {{-- Long Description --}}
            <label class="required fw-bold fs-6 mb-2">Long Description</label>
            <div class=" mb-5">
            <textarea class="form-control" id="kt_docs_tinymce_basic1" name="long_desc" required>{{old('long_desc')}}</textarea>
            </div>

            {{-- Image --}}
            <label class="required fw-bold fs-6 mb-2">Image</label>
            <div class="input-group mb-5">
                <input type="file" class="form-control" name="s_image" required>
            </div>

            {{-- Multiple Image --}}
            <label class="required fw-bold fs-6 mb-2">Multiple Image</label>
            <div class="input-group mb-5">
                <input type="file" class="form-control" name="ser_mul_image[]" multiple required>
            </div>

        </div>
        <!--end::Input group-->
    </div>
    <!--end::Body-->
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
</section>
@endsection
