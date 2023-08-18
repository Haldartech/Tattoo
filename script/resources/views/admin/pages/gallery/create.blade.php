@extends('admin.resource.main')
@section('title', 'Add Gallery')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<section class="content-header">
    <h1>
        @yield('title')
        <small><a href="{{url('/admin/list-gallery')}}" class="btn btn-warning btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i>BACK</a></small>
    </h1>
  </section>
  <section class="content">
    <form action="{{url('/admin/addGallery')}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
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

              {{-- Title --}}
            <label class="required fw-bold fs-6 mb-2">Category</label>
            <div class="input-group mb-5">
                <?php $categories=DB::table('cats')->orderBy('title','asc')->get(); ?>
                <div class="input-group row">
                    <div class="col-md-11">
                        <select name="title" class="form-select" data-control="select2" data-placeholder="Select Category" required>
                            <option value="">  </option>
                            @foreach ($categories as $category)
                            <option value="{{$category->title}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-primary btn-active" data-bs-toggle="modal" data-bs-target="#CategoryModal">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
          </div>

            {{-- tag --}}
            <label class="required fw-bold fs-6 mb-2">Tag</label>
            <div class="input-group mb-5">
                <input type="text" name="tag[]" class="form-control" id="input-box" placeholder="Enter tag" value="{{old('tag')}}">
            </div>

            {{-- Image --}}
            <label class="required fw-bold fs-6 mb-2">Image</label>
            <div class="input-group mb-5">
                <input type="file" name="gal_mul_img[]" multiple class="form-control" required>
            </div>

        <!--end::Input group-->
    </div>
    <!--end::Body-->
</div>
<div class=" mt-8" style="float: right">
    <?php //$count = DB::table('categories')->where('title', '!=', null)->count(); ?>
        {{-- @if($count == 5)
        <button type="submit" class="btn btn-primary" id="submit" disabled>Submit</button>
        @else --}}
        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        {{-- @endif --}}
  </div>
</div>
<div class="col-xl-4">
  <!-- general form elements -->
  <div class="card">
    <!--begin::Header-->
    <div class="card-header border-0 bg-danger mb-5" style="min-height: 40px;">
        <h3 class="card-title fw-bolder text-white">Tags</h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body p-0">
          <!--begin::Input group-->
        <?php
            $tags = DB::table('galleries')->get();
$objects = [];

foreach ($tags as $tag) {
    $arrval = json_decode($tag->tag, true);
    if (is_array($arrval)) {
        $cut = count($arrval);
        for ($i = 0; $i < $cut; $i++) {
            if (is_array($arrval[$i])) {
                $objects[] = implode(',', $arrval[$i]);
            } else {
                $objects[] = $arrval[$i];
            }
        }
    }
}


foreach ($objects as $obj) {
    $result = explode(" ", $obj);
    $text = implode(" ", $result);
    $count = count($result);
    for ($i = 0; $i < $count; $i++) {
        echo '<span class="btn btn-info btn-sm my-button mb-2" data-value="' . $result[$i] . '">' . str_replace(',', '', $result[$i]) . '</span>' . '&nbsp;';
    }
}
            ?>

          <!--end::Input group-->
    </div>
    <!--end::Body-->
</div>
</div>
</div>
<!--end::Row-->
<script>
$(document).ready(function() {
  $('.my-button').click(function() {
    var value = $(this).data('value');
    var currentValue = $('#input-box').val();
    var newValue = currentValue + ' ' + value;
    $('#input-box').val(newValue.trim());
  });
});
</script>

</form>

<!--Category Modal start-->
<div class="modal fade" id="CategoryModal" tabindex="-1" aria-labelledby="CategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="CategoryModalLabel">Add Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('/admin/addCategory')}}" onsubmit="btnDisable()" method="post">
        <div class="modal-body">
                {{ csrf_field() }}
          <!--begin::Row-->
          <label class="required fw-bold fs-6 mb-2">Category</label>
          <div class="input-group mb-5">
            <input type="text" class="form-control" name="title" placeholder="Category" required>
          </div>
          <!--end::Row-->

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="save" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--Category Modal end -->


</section>
@endsection
