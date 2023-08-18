@extends('admin.resource.main')
@section('title', 'Edit Entry')
@section('content')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('summary-ckeditor' );
</script>
<section class="content-header">
    <h1>
        @yield('title')
      <small><a href="{{url('/admin/paydone-list-entry')}}" class="btn btn-warning btn-xs btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>
  </section>
  <section class="content">
    <form action="{{url('/admin/editEntry',$data->id)}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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


              <div class="row">
                <div class="col-md-6">

                  {{-- name --}}
              <label class="required fw-bold fs-6 mb-2">Name</label>
              <div class="input-group mb-5">
              <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="name" required>
              </div>

              {{-- Date of Birth --}}
              <label class="required fw-bold fs-6 mb-2">Date of Birth</label>
              <div class="input-group mb-5">
              <input type="date" class="form-control" name="dob" value="{{$data->dob}}" required>
              </div>

                </div>

                <div class="col-md-6">

                  {{-- Phone No --}}
              <label class="required fw-bold fs-6 mb-2">Phone No</label>
              <div class="input-group mb-5">
              <input type="text" class="form-control" maxlength="10" name="phone" value="{{$data->phone}}" placeholder="Phone No" required>
              </div>

              {{-- Whatsapp No --}}
              <label class="required fw-bold fs-6 mb-2">Whatsapp No</label>
              <div class="input-group mb-5">
              <input type="text" class="form-control" maxlength="10" name="wp_no" value="{{$data->wp_no}}" placeholder="Whatsapp No" required>
              </div>

                </div>

                <div class="col-md-6">
                    {{-- Payment Done --}}
                    <label class="fw-bold fs-6 mb-2">Payment Done</label>
                    <div class="input-group mb-5">
                    <input type="text" class="form-control" name="pay_done" value="{{$data->pay_done}}" placeholder="Payment Done">
                    </div>
                </div>

                <div class="col-md-6">
                    {{-- Payment Due --}}
                    <label class="fw-bold fs-6 mb-2">Payment Done</label>
                    <div class="input-group mb-5">
                    <input type="text" class="form-control" name="pay_due" value="{{$data->pay_due}}" placeholder="Payment Due">
                    </div>
                </div>

              <div class="col-md-4">
                  {{-- Image1 --}}
                  <label class="fw-bold fs-6 mb-2">Pre-Tattoo</label>
                  <div class="input-group mb-5">
                        @if(!empty($data->image1))
                        <img src="{{url("/public/images/entry/".$data->pre_image)}}" alt="image" width="45px" height="45px">
                        @endif
                      <input type="file" name="pre_image" class="form-control">
                  </div>
              </div>

              <div class="col-md-4">
                  {{-- Image1 --}}
                  <label class="required fw-bold fs-6 mb-2">Post-Tattoo</label>
                  <div class="input-group mb-5">
                        <img src="{{url("/public/images/entry/".$data->post_image)}}" alt="image" width="45px" height="45px">
                      <input type="file" name="post_image" class="form-control">
                  </div>
              </div>

              <div class="col-md-4">
                  {{-- Image1 --}}
                  <label class="fw-bold fs-6 mb-2">Ater Treatment</label>
                  <div class="input-group mb-5">
                        @if(!empty($data->image3))
                        <img src="{{url("/public/images/entry/".$data->after_image)}}" alt="image" width="45px" height="45px">
                        @endif
                      <input type="file" name="after_image" class="form-control">
                  </div>
              </div>
          </div>

          {{-- Remark --}}
        <label class="fw-bold fs-6 mb-2">Remark</label>
        <div class="mb-5">
        <textarea class="form-control" id="kt_docs_tinymce_basic" name="remark">{{$data->remark}}</textarea>
        </div>

        <!--end::Input group-->

        <div class="mt-8" style="float: right">
            <button type="submit" class="btn btn-primary btn-xs" id="submit">Submit</button>
          </div>

    </div>
    <!--end::Body-->
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
    $(function() {
        $("input[name='phone']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });
</script>

<script>
    $(function() {
        $("input[name='wp_no']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });
</script>
</section>
@endsection
