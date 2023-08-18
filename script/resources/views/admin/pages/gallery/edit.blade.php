@extends('admin.resource.main')
@section('title', 'Edit Gallery')
@section('content')
<section class="content-header">
    <h1>
        @yield('title')
      <small><a href="{{url('/admin/list-gallery')}}" class="btn btn-warning btn-xs btn-flat btn-sm" title="Back"><i class="fa fa-plus"></i> BACK</a></small>
    </h1>
  </section>
  <section class="content">
    <form action="{{url('/admin/editGallery',$data->id)}}" onsubmit="btnDisable()" method="post" enctype="multipart/form-data">
        {{-- <input type="hidden" name="_method" value="PATCH"> --}}
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
                            <option value=""> </option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->title }}"
                                {{-- @selected($category->title == $category->title) --}}
                                >
                                {{ $category->title }}
                            </option>
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

                <?php
                $tagArray = explode(" ", $data->tag);
                $tagString = implode(" ", $tagArray);
                $tag = str_replace(['[', ']', '"'], '', $tagString);
                ?>

                <input type="text" name="tag[]" class="form-control" id="input-box" placeholder="tag" value="{{$tag}}">
            </div>

             {{-- Image --}}
             <?php $gal_imgs = DB::table('gallery_mul_imgs')->where("gal_id",$data->cat_id)->get();
                foreach ($gal_imgs as $gal_img) {
            ?>
            <img src="{{url('public/images/gallery/'.$gal_img->gal_mul_img)}}" alt="gal_mul_img" id="img{{ $gal_img->id }}" style="width: 50px; height: 50px;">
            <a title="Delete" class="btn btn-icon btn-circle btn-danger btn-sm" id="remv{{ $gal_img->id }}" onclick="productdeleteimage('{{ $gal_img->id }}');"><i class="fa fa-times" aria-hidden="true"></i></a>
            <?php } ?><br>
            <label class="required fw-bold fs-6 mb-2">Image</label>
            <div class="input-group mb-5">
                <input type="file" name="gal_mul_img[]" multiple class="form-control">
            </div>

        <!--end::Input group-->
    </div>
    <!--end::Body-->
</div>
<div class=" mt-8" style="float: right">
    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
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

<script>
    function productdeleteimage(id)
{
        if (confirm("Do you realy want to delete this record?")) {
            // alert(id);
            $.ajax({
                url: "{{ url('/ajaxGalleryImageDelete') }}" + '/' + id,
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
</form>
</section>
@endsection
