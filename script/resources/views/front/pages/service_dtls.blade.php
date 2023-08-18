<?php $pages = DB::table('pages')->where("id","2")->first(); ?>
@section('title', $service_dtls->title)
@extends('front.resource.main')
@section('content')

<!-- Header Banner -->
<div
class="banner-header section-padding valign bg-img bg-fixed"
data-overlay-dark="2"
data-background="{{url('public/images/pages_manager/'.$pages->p_image)}}"
>
<div class="container">
  <div class="row">
    <div class="col-md-6 text-left caption mt-90">
      <h5 class="animate-box" data-animate-effect="fadeInUp">
        <a href="{{url('/')}}">Home</a> / @yield('title')
      </h5>
      <h1 class="animate-box" data-animate-effect="fadeInUp">
        @yield('title')
      </h1>
      <hr class="animate-box" data-animate-effect="fadeInUp" />
      <p class="animate-box" data-animate-effect="fadeInUp">
        We design and build engaging, responsive websites for a wide range
        of businesses in Charleston and the surrounding areas.
      </p>
    </div>
  </div>
</div>
</div>
<!-- hr -->
<hr class="line-vr-section" />
<!-- Services Page -->
<section class="section-padding">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <p>
        <?php echo $service_dtls->long_desc; ?>
      </p>
      <!-- Gallery -->
      <div class="row">

        @foreach ($service_imgs as $service_img)

        <div class="col-md-6 gallery-item animate-box" data-animate-effect="fadeInUp">
          <a href="{{url('public/images/service_mul_img/'.$service_img->ser_mul_image)}}" title="artefact" class="img-zoom">
            <div class="gallery-box">
              <div class="gallery-img">
                <img src="{{url('public/images/service_mul_img/'.$service_img->ser_mul_image)}}" class="img-fluid mx-auto d-block" alt="ser_mul_image"/>
              </div>
            </div>
          </a>
        </div>

        @endforeach

      </div>
    </div>
  </div>
</div>
</section>
<!-- Prev-Next Post -->
<section class="artefact-post-prev-next">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div class="artefact-post-prev-next-left">
        <?php $prv = DB::table('services')->where('slug', '<', $service_dtls->slug)->max('slug');  ?>
        @if(!empty($prv))
        <a href="{{url("s/".$prv)}}">
            <i class="ti-arrow-left"></i>
            <?php $previous = str_replace('-', ' ', $prv);
             echo $previous;
            ?>
        </a>
        @endif
        </div>
        <a href="{{url('/service')}}"><i class="ti-layout-grid3-alt"></i></a>
        <div class="artefact-post-prev-next-right">
        <?php $nxt = DB::table('services')->where('slug', '>', $service_dtls->slug)->max('slug');  ?>
        @if(!empty($nxt))
        <a href="{{url("s/".$nxt)}}" style="hyphens: none;">
            <?php $next = str_replace('-', ' ', $nxt);
             echo $next;
            ?> <i class="ti-arrow-right"></i>
        </a>
        @endif
        </div>
      </div>
    </div>
  </div>
</div>
</section>

@endsection
