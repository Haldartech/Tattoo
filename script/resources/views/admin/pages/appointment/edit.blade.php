@extends('admin.resource.main')
@section('title', 'Edit Appointment Service & Artists')
@section('content')
<section class="content-header">
    <h1>
        @yield('title')
      <small><a href="{{url('/admin/list-app')}}" class="btn btn-warning btn-xs btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>
  </section>
  <section class="content">
    <form action="{{url('/admin/editApp',$data->id)}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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

             {{-- Service --}}
            <label class="fw-bold fs-6 mb-2">Service</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="service" value="{{$data->service}}" placeholder=" Service">
            </div>

            {{-- Artist --}}
            <label class="fw-bold fs-6 mb-2">Artist</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="artist" value="{{$data->artist}}" placeholder=" Artist">
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
</section>
@endsection
