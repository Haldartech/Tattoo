@extends('admin.resource.main')
@section('title', 'Add Pricing')
@section('content')
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{url('/admin/list-pricing')}}" class="btn btn-warning btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i>BACK</a></small>
    </h1>
  </section>
  <section class="content">
    <form action="{{url('/admin/addPricing')}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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
            <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder=" Title" required>
            </div>

            {{-- Currency --}}
            <label class="required fw-bold fs-6 mb-2">Currency <span title='<i class="fa fa-inr"></i>'> (e.g.) </span></label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="currency" value="{{old('currency')}}" placeholder=" Currency" required>
            </div>

            {{-- Amount --}}
            <label class="required fw-bold fs-6 mb-2">Amount</label>
            <div class="input-group mb-5">
            <input type="text" class="form-control" name="amount" value="{{old('amount')}}" placeholder=" Amount" required>
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
