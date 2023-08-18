<?php $pages = DB::table('pages')->where("id","3")->first(); ?>
@section('title', $pages->title)
@extends('front.resource.main')
@section('content')

<!-- Header Banner -->
<section
class="banner-header full-height section-padding valign bg-img bg-fixed"
data-overlay-dark="4"
data-background="{{url('public/images/pages_manager/'.$pages->p_image)}}"
>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-7 text-center caption mt-90">
      <h5 class="animate-box" data-animate-effect="fadeInUp">
        <a href="{{url('/')}}">Home</a> / @yield('title')
      </h5>
      <h1 class="animate-box" data-animate-effect="fadeInUp">
        @yield('title')
      </h1>
      <hr class="animate-box" data-animate-effect="fadeInUp" />
      <p class="animate-box" data-animate-effect="fadeInUp">
        <?php echo $pages->desc; ?>
      </p>
    </div>
  </div>
</div>
</section>
<!-- hr -->
<hr class="line-vr-section" />
<!-- Price -->
<section class="price-banner menu-book section-padding">
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-7 valign">
      <div class="content">
        <?php $pricings = DB::table('pricings')->orderBy("id","desc")->get();?>
        @foreach ($pricings as $pricing)
        <div class="menu-list">
          <div class="item">
            <div class="flex">
              <div class="title">{{$pricing->title}}</div>
              <div class="price"><?php echo $pricing->currency ?>{{$pricing->amount}}</div>
            </div>
            <div class="dots"></div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
</section>

@endsection
