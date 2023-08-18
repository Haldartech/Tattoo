@extends('admin.resource.main')
@section('title', 'Add Entry')
@section('content')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('summary-ckeditor' );
</script>
<section class="content-header">
    <h1>
        @yield('title')
    </h1>
  </section>
  <section class="content">
    <form action="{{url('/admin/addEntry')}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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
            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="name" required>
            </div>

            {{-- Date of Birth --}}
            <label class="required fw-bold fs-6 mb-2">Date of Birth</label>
            <div class="input-group mb-5">
            <input type="date" class="form-control" name="dob" value="{{old('dob')}}" required>
            </div>

              </div>

              <div class="col-md-6">

            {{-- Phone No --}}
            <label class="required fw-bold fs-6 mb-2">Phone No</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" maxlength="10" name="phone" value="{{old('phone')}}" placeholder="Phone No" required>
            </div>

            {{-- Whatsapp No --}}
            <label class="required fw-bold fs-6 mb-2">Whatsapp No</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" maxlength="10" name="wp_no" value="{{old('wp_no')}}" placeholder="Whatsapp No" required>
            </div>

              </div>


            <div class="col-md-6">
                {{-- Payment Done --}}
                <label class="fw-bold fs-6 mb-2">Payment Done</label>
                <div class="input-group mb-5">
                <input type="text" class="form-control" name="pay_done" value="{{old('pay_done')}}" placeholder="Payment Done">
                </div>
            </div>

            <div class="col-md-6">
                {{-- Payment Due --}}
                <label class="fw-bold fs-6 mb-2">Payment Due</label>
                <div class="input-group mb-5">
                <input type="text" class="form-control" name="pay_due" value="{{old('pay_due')}}" placeholder="Payment Due">
                </div>
            </div>

            <div class="col-md-4">
                {{-- Image1 --}}
                <label class="fw-bold fs-6 mb-2">Pre-Tattoo</label>
                <div class="input-group mb-5">
                    <input type="file" name="pre_image" class="form-control">
                </div>
            </div>

            <div class="col-md-4">
                {{-- Image1 --}}
                <label class="required fw-bold fs-6 mb-2">Post-Tattoo</label>
                <div class="input-group mb-5">
                    <input type="file" name="post_image" class="form-control" required>
                </div>
            </div>

            <div class="col-md-4">
                {{-- Image1 --}}
                <label class="fw-bold fs-6 mb-2">Ater Treatment</label>
                <div class="input-group mb-5">
                    <input type="file" name="after_image" class="form-control">
                </div>
            </div>
        </div>

        {{-- Remark --}}
        <label class="fw-bold fs-6 mb-2">Remark</label>
        <div class="mb-5">
        <textarea class="form-control" id="kt_docs_tinymce_basic" name="remark">{{old('remark')}}</textarea>
        </div>

        <!--end::Input group-->

        <div class="mt-8" style="float: right">
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
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
