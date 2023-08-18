@extends('admin.resource.main')
@section('title', 'Setting')
@section('content')
<section class="content-header">
    <h1>
        @yield('title')
    </h1>

  </section>
  @foreach ($datas as $data)
  <section class="content">

    <form action="{{url('/admin/editSetting',$data->id)}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
  <!--begin::Row-->
  <div class="row gy-5 g-xl-8">
    <div class="col-xl-8">
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

               {{-- logo --}}
            <label class="fw-bold fs-6 mb-2">Logo</label>
            <div class="input-group mb-5">
                <img src="{{url("public/images/logo/".$data->logo)}}" alt="logo" width="43px" height="auto">
            <input type="file" class="form-control" name="logo">
            </div>

            {{-- Tatto Title --}}
            <label class="required fw-bold fs-6 mb-2">Title</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="title" value="{{$data->title}}" placeholder="Address" required>
            </div>

            {{-- Tatto Subtitle --}}
            <label class="required fw-bold fs-6 mb-2">Subtitle</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="subtitle" value="{{$data->subtitle}}" placeholder="Subtitle" required>
            </div>

            {{-- Address --}}
            <label class="required fw-bold fs-6 mb-2">Address</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="address" value="{{$data->address}}" placeholder="Address" required>
            </div>

            {{-- Another Address --}}
            <label class="required fw-bold fs-6 mb-2">Another Address</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="sec_address" value="{{$data->sec_address}}" placeholder="Another Address" required>
            </div>

               {{-- Gmail --}}
            <label class="required fw-bold fs-6 mb-2">Gmail</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="gmail" value="{{$data->gmail}}" placeholder="Gmail" required>
            </div>

            {{-- Mobile --}}
            <label class="required fw-bold fs-6 mb-2">Mobile</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="phone" value="{{$data->phone}}" placeholder="Mobile" required maxlength="10" title="Please enter valid phone number" required>
            </div>

        <div class="row">

            <div class="col-md-3">
                {{-- Monday --}}
                <label class="required fw-bold fs-6 mb-2">Monday</label>
                <div class="input-group mb-5">
                <input type="text" class="form-control" name="mon" value="{{$data->mon}}" placeholder="00:00 - 00:00" required>
                </div>
            </div>

            <div class="col-md-3">
                {{-- Tuesday --}}
                <label class="required fw-bold fs-6 mb-2">Tuesday</label>
                <div class="input-group mb-5">
                <input type="text" class="form-control" name="tue" value="{{$data->tue}}" placeholder="00:00 - 00:00" required>
                </div>
            </div>

            <div class="col-md-3">
                {{-- Wednesday --}}
                <label class="required fw-bold fs-6 mb-2">Wednesday</label>
                <div class="input-group mb-5">
                <input type="text" class="form-control" name="wed" value="{{$data->wed}}" placeholder="00:00 - 00:00" required>
                </div>
            </div>

            <div class="col-md-3">
                {{-- Thursday --}}
                <label class="required fw-bold fs-6 mb-2">Thursday</label>
                <div class="input-group mb-5">
                <input type="text" class="form-control" name="thu" value="{{$data->thu}}" placeholder="00:00 - 00:00" required>
                </div>
            </div>

            <div class="col-md-3">
                {{-- Friday --}}
                <label class="required fw-bold fs-6 mb-2">Friday</label>
                <div class="input-group mb-5">
                <input type="text" class="form-control" name="fri" value="{{$data->fri}}" placeholder="00:00 - 00:00" required>
                </div>
            </div>

            <div class="col-md-3">
                {{-- Satursday --}}
                <label class="required fw-bold fs-6 mb-2">Satursday</label>
                <div class="input-group mb-5">
                <input type="text" class="form-control" name="sat" value="{{$data->sat}}" placeholder="00:00 - 00:00" required>
                </div>
            </div>

            <div class="col-md-3">
                {{-- Weekend --}}
                <label class="required fw-bold fs-6 mb-2">Weekend</label>
                <div class="input-group mb-5">
                <input type="text" class="form-control" name="weekend" value="{{$data->weekend}}" placeholder="00:00 - 00:00" required>
                </div>
            </div>
        </div>

        <!--end::Input group-->
    </div>
    <!--end::Body-->
</div>
</div>
<div class="col-xl-4">
  <!-- general form elements -->
  <div class="card">
    <!--begin::Header-->
    <div class="card-header border-0 bg-danger mb-5" style="min-height: 40px;">
        <h3 class="card-title fw-bolder text-white">Action</h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body p-0">
          <!--begin::Input group-->

          {{-- Promo --}}
          <label class="fw-bold fs-6 mb-2">Promo Video</label>
          <div class="input-group mb-5">
          <input type="text" class="form-control" name="promo" value="{{$data->promo}}" placeholder="Video Link">
          </div>

          {{-- Facebok --}}
          <label class="fw-bold fs-6 mb-2">Facebok</label>
          <div class="input-group mb-5">
          <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}" placeholder="Facebok">
          </div>

          {{-- Youtube --}}
          <label class="fw-bold fs-6 mb-2">Youtube</label>
          <div class="input-group mb-5">
          <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}" placeholder="Youtube">
          </div>

          {{-- Twitter --}}
          <label class="fw-bold fs-6 mb-2">Twitter</label>
          <div class="input-group mb-5">
          <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}" placeholder="Twitter">
          </div>

          {{-- Instagram --}}
          <label class="fw-bold fs-6 mb-2">Instagram</label>
          <div class="input-group mb-5">
          <input type="text" class="form-control" name="insta" value="{{$data->insta}}" placeholder="Instagram">
          </div>

          {{-- Instagram --}}
          <label class="fw-bold fs-6 mb-2">Pinterest </label>
          <div class="input-group mb-5">
          <input type="text" class="form-control" name="pinterest" value="{{$data->pinterest}}" placeholder="Pinterest">
          </div>

          <div class="input-group mt-8">
            <button type="submit" class="btn btn-primary btn-xs" id="submit">Submit</button>
          </div>
          <!--end::Input group-->
    </div>
    <!--end::Body-->
</div>
</div>
</div>
<!--end::Row-->

</form>
@endforeach

<script>
    $(function() {
        $("input[name='phone']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });
</script>
</section>
@endsection
