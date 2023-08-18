@extends('admin.resource.main')
@section('title', 'Add Team')
@section('content')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('summary-ckeditor' );
</script>
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{url('/admin/list-team')}}" class="btn btn-warning btn-xs btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>
  </section>
  <section class="content">
    <form action="{{url('/admin/addTeam')}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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

              {{-- Name --}}
            <label class="required fw-bold fs-6 mb-2">Name</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Name" required>
            </div>

            {{-- Designation --}}
            <label class="required fw-bold fs-6 mb-2">Designation</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="designation" value="{{old('designation')}}" placeholder="Designation" required>
            </div>

            {{-- Description --}}
            <label class="required fw-bold fs-6 mb-2">Description</label>
            <div class=" mb-5">
            <textarea class="form-control" id="kt_docs_tinymce_basic" name="desc" required>{{old('desc')}}</textarea>
            </div>

            {{-- About Me --}}
            <label class="required fw-bold fs-6 mb-2">About Me</label>
            <div class=" mb-5">
            <textarea class="form-control" id="kt_docs_tinymce_basic1" name="about_me" required>{{old('about_me')}}</textarea>
            </div>

            {{-- Email --}}
            <label class="required fw-bold fs-6 mb-2">Email</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Email" required>
            </div>

            {{-- Phone --}}
            <label class="required fw-bold fs-6 mb-2">Phone</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="phone" maxlength="10" value="{{old('phone')}}" placeholder="Phone" required>
            </div>

            {{-- Facebook --}}
            <label class="required fw-bold fs-6 mb-2">Facebook</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="facebook" value="{{old('facebook')}}" placeholder="Facebook" required>
            </div>

            {{-- Youtube --}}
            <label class="required fw-bold fs-6 mb-2">Youtube</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="youtube" value="{{old('youtube')}}" placeholder="Youtube" required>
            </div>

            {{-- Twitter --}}
            <label class="required fw-bold fs-6 mb-2">Twitter</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="twitter" value="{{old('twitter')}}" placeholder="Twitter" required>
            </div>

            {{-- Instagram --}}
            <label class="required fw-bold fs-6 mb-2">Instagram</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="insta" value="{{old('insta')}}" placeholder="Instagram" required>
            </div>

            {{-- Image --}}
            <label class="required fw-bold fs-6 mb-2">Image</label>
            <div class="input-group mb-5">
                <input type="file" class="form-control" name="image" required>
            </div>

            {{-- Latest Work Image --}}
            <label class="required fw-bold fs-6 mb-2">Latest Work Image</label>
            <div class="input-group mb-5">
                <input type="file" class="form-control" name="team_work_image[]" multiple required>
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
    $(function() {
        $("input[name='phone']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });
</script>
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
