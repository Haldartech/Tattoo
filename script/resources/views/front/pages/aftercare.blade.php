<?php $pages = DB::table('pages')->where("id","6")->first(); ?>
@section('title', $pages->title)
@extends('front.resource.main')
@section('content')

<style>
    .desc ul li::before{
    content: "\2714";
    color:#904d30;
    padding-right: 20px;
}
</style>


<!-- Header Banner -->
<section
class="banner-header full-height valign bg-img bg-fixed"
data-overlay-dark="4"
data-background="{{url('public/images/pages_manager/'.$pages->p_image)}}"
>
<div class="container">
  <div class="row">
    <div class="col-md-6 text-left caption mt-90">
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
</section>
<!-- hr -->
<hr class="line-vr-section" />
<!-- Aftercare -->
<section class="section-padding">
<div class="container">
  <div class="about-info">

    <?php $aftercares = DB::table('aftercares')->orderBy("id","desc")->get();
    $i = 1;
    ?>
    @foreach ($aftercares as $aftercare)
    @if ($i%2 == 0)
    <div class="row">
      <div class="col-md-4">
        <div class="about-info-img mb-90">
          <div class="img">
            <img src="{{url('public/images/aftercare/'.$aftercare->ac_image)}}" class="img-fluid" alt="ac_image" />
          </div>
        </div>
      </div>
      <div class="col-md-8 desc">
        <h2 class="section-title2">{{$aftercare->title}}</h2>
        <p><?php echo $aftercare->desc; ?></p>
      </div>
    </div>

    @else

    <div class="row">
      <div class="col-md-8 mb-60 desc">
        <h2 class="section-title2">{{$aftercare->title}}</h2>
        <p><?php echo $aftercare->desc; ?></p>
      </div>
      <div class="col-md-4 mb-30">
        <div class="about-info-img">
          <div class="img">
            <img src="{{url('public/images/aftercare/'.$aftercare->ac_image)}}" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </div>

    @endif
    <?php $i++; ?>
    @endforeach

  </div>
</div>
</section>


@endsection
