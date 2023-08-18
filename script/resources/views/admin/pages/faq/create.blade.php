@extends('admin.resource.main')
@section('title', 'Add Faq')
@section('content')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('summary-ckeditor' );
</script>
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{url('/admin/list-faq')}}" class="btn btn-warning btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i>BACK</a></small>
    </h1>
  </section>
  <section class="content">
    <form action="{{url('/admin/addFaq')}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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

            {{-- Question --}}
            <label class="required fw-bold fs-6 mb-2">Question</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="question" value="{{old('question')}}" placeholder=" Question" required>
            </div>

            {{-- Answer --}}
            <label class="required fw-bold fs-6 mb-2">Answer</label>
            <div class="mb-5">
            <textarea class="form-control" id="kt_docs_tinymce_basic" name="answer" required>{{old('answer')}}</textarea>
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
</section>
@endsection
