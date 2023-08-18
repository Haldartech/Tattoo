<?php $pages = DB::table('pages')->where("id","4")->first(); ?>
@section('title', $pages->title)
@extends('front.resource.main')
@section('content')
<style>
        .animate-box ul li::before{
        content: "\2714";
        color:#904d30;
        padding-right: 20px;
    }
</style>
<!-- Header Banner -->
<section
class="banner-header full-height section-padding valign bg-img bg-fixed"
data-overlay-dark="4"
data-background="{{url('public/images/pages_manager/'.$pages->p_image)}}"
>
<div class="container">
  <div class="row">
    <div class="col-md-6 caption mt-90">
      <h5 class="animate-box" data-animate-effect="fadeInUp">
        <a href="{{url('/')}}">Home</a> / @yield("title")
      </h5>
      <h1 class="animate-box" data-animate-effect="fadeInUp">
        @yield("title")
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
<!-- Team -->
<section class="team section-padding">
<div class="container">
  <div class="row">

    <?php $teams = DB::table('teams')->orderBy("id","desc")->get(); ?>
    @foreach ($teams as $team)

    <div class="col-md-12 mb-60 animate-box" data-animate-effect="fadeInUp" >
      <div class="item right">
        <figure>
          <img src="{{url("public/images/team/".$team->image)}}" alt="" class="img-fluid" />
        </figure>
        <div class="caption padding-left">
          <div class="name">{{$team->name}}</div>
          <div class="subname">{{$team->designation}}</div>
          <p>
            <?php echo $team->desc; ?>
          </p>
          <a href="{{url('t/'.$team->slug)}}" class="btn-curve btn-1 mt-10">
            <span>View Details</span>
          </a>
        </div>
      </div>
    </div>

    @endforeach

  </div>
</div>
</section>

@endsection
