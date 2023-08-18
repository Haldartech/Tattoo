@extends('admin.resource.main')
@section('title', 'Add Banner Title')
@section('content')
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{url('/admin/list-bannertitle')}}" class="btn btn-warning btn-xs btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>
  </section>
  <section class="content">
    <form action="{{url('/admin/addBannertitle')}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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
            <input type="text" class="form-control" name="b_title" value="{{old('b_title')}}" placeholder="Title" required>
            </div>

            {{-- Subtitle --}}
            <label class="fw-bold fs-6 mb-2">Subtitle</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="b_subtitle" value="{{old('b_subtitle')}}" placeholder="Subtitle">
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
</section>
@endsection
