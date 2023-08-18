<?php $pages = DB::table('pages')->where("id","5")->first(); ?>
@section('title', 'Portfolio')
@extends('front.resource.main')
@section('content')

<!-- Header Banner -->
<div
class="banner-header full-height section-padding valign bg-img bg-fixed"
data-overlay-dark="4"
data-background="{{url('public/images/pages_manager/'.$pages->p_image)}}"
>
<div class="container">
  <div class="row">
    <div class="col-md-6 caption mt-90">
      <h5 class="animate-box" data-animate-effect="fadeInUp">
        <a href="index.html">Home</a> / @yield('title')
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
</div>
<!-- hr -->
<hr class="line-vr-section" />
<!-- Image Gallery -->
<section class="section-padding">
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div class="section-title">Image <span>Gallery</span></div>
    </div>
  </div>
  <div class="row">
    <!-- 2 columns -->
    <?php $portfolio = DB::table('portfolio_imgs')->get(); ?>
    @foreach ($portfolio as $index => $port)
        <div class="col-md-<?php echo ($index < 2) ? '6' : '4'; ?> gallery-item">
            <a href="{{url('public/images/portfolio/'.$port->image)}}" title="" class="img-zoom">
                <div class="gallery-box">
                    <div class="gallery-img">
                        <img src="{{url('public/images/portfolio/'.$port->image)}}" class="img-fluid mx-auto d-block" alt=""/>
                    </div>
                </div>
            </a>
        </div>
    @endforeach

  </div>
</div>
</section>
<!-- hr -->
<hr class="line-vr-section" />
<!-- Video Gallery -->
<section class="section-padding">
<div class="container">
  <div class="row">
    <div class="col-md-9 mb-30">
      <div class="section-title">Video <span>Gallery</span></div>
    </div>
  </div>
  <div class="row">
    <!-- 3 columns -->
    <?php $portfoliovid = DB::table('portfolio_vids')->get(); ?>
    @foreach ($portfoliovid as $index => $portv)
    <div class="col-md-<?php echo ($index < 2) ? '6' : '4'; ?>">
        <div class="vid-area mb-30">
            <div class="vid-icon">
                <iframe width="560" height="315" src="{{url('https://www.youtube.com/embed/'.$portv->video)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <a class="video-gallery-button vid" href="{{url('https://www.youtube.com/embed/'.$portv->video)}}">
                    <span class="video-gallery-polygon">
                        <i class="ti-control-play"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
@endforeach


  </div>
</div>
</section>

@endsection
