@extends('admin.resource.main')
@section('title', 'Edit Team')
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
    <form action="{{url('/admin/editTeam',$data->id)}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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

              {{-- Name --}}
            <label class="required fw-bold fs-6 mb-2">Name</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Name" required>
            </div>

            {{-- Designation --}}
            <label class="required fw-bold fs-6 mb-2">Designation</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="designation" value="{{$data->designation}}" placeholder="Designation" required>
            </div>

            {{-- Description --}}
            <label class="required fw-bold fs-6 mb-2">Description</label>
            <div class=" mb-5">
            <textarea class="form-control" id="kt_docs_tinymce_basic" name="desc" required>{{$data->desc}}</textarea>
            </div>

            {{-- About Me --}}
            <label class="required fw-bold fs-6 mb-2">About Me</label>
            <div class=" mb-5">
            <textarea class="form-control" id="kt_docs_tinymce_basic1" name="about_me" required>{{$data->about_me}}</textarea>
            </div>

            {{-- Email --}}
            <label class="required fw-bold fs-6 mb-2">Email</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="email" value="{{$data->email}}" placeholder="Email" required>
            </div>

            {{-- Phone --}}
            <label class="required fw-bold fs-6 mb-2">Phone</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="phone" maxlength="10" value="{{$data->phone}}" placeholder="Phone" required>
            </div>

            {{-- Facebook --}}
            <label class="required fw-bold fs-6 mb-2">Facebook</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}" placeholder="Facebook" required>
            </div>

            {{-- Youtube --}}
            <label class="required fw-bold fs-6 mb-2">Youtube</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}" placeholder="Youtube" required>
            </div>

            {{-- Twitter --}}
            <label class="required fw-bold fs-6 mb-2">Twitter</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}" placeholder="Twitter" required>
            </div>

            {{-- Instagram --}}
            <label class="required fw-bold fs-6 mb-2">Instagram</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="insta" value="{{$data->insta}}" placeholder="Instagram" required>
            </div>

            {{-- Image --}}
            <label class="fw-bold fs-6 mb-2">Image</label>
            <div class="input-group mb-5">
                <img src="{{url("/public/images/team/".$data->image)}}" alt="image" width="50px" height="43px">
                <input type="file" class="form-control" name="image">
            </div>

            {{-- Latest Work Image --}}

            <?php $team_imgs = DB::table('team_work_images')->where("t_id",$data->id)->get();
                foreach ($team_imgs as $team_img) {
            ?>
            <img src="{{url('public/images/team_work/'.$team_img->team_work_image)}}" alt="team_work_image" id="img{{ $team_img->id }}" style="width: 50px; height: 50px;">
            <a title="Delete" class="btn btn-icon btn-circle btn-danger btn-sm" id="remv{{ $team_img->id }}" onclick="productdeleteimage('{{ $team_img->id }}');"><i class="fa fa-times" aria-hidden="true"></i></a>
            <?php } ?><br>
            <label class="fw-bold fs-6 mb-2">Latest Work Image</label>
            <div class="input-group mb-5">
                <input type="file" class="form-control" name="team_work_image[]" multiple>
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
<script>
    function productdeleteimage(id)
{
        if (confirm("Do you realy want to delete this record?")) {
            // alert(id);
            $.ajax({
                url: "{{ url('/ajaxTeamImageDelete') }}" + '/' + id,
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
