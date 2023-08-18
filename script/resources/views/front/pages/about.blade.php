<?php $pages = DB::table('pages')->where("id","1")->first(); ?>
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
          <div class="col-md-6 text-left caption mt-60">
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
    <!-- About -->
    <section class="about section-padding">
      <div class="container">
        <?php $about = DB::table('abouts')->first(); ?>
        <div class="row">
          <div class="col-md-7 animate-box desc" data-animate-effect="fadeInLeft">
            <div class="section-subtitle">{{$about->subtitle}}</div>
            <div class="section-title white">{{$about->title}}
                @if(!empty($about->sec_title))
                <span>{{$about->sec_title}}</span>
                @endif
            </div>
            <p>
             <?php echo $about->desc; ?>
            </p>
          </div>
          <div class="col-md-5 mt-30 animate-box" data-animate-effect="fadeInRight">
            <img src="{{url('public/images/about/'.$about->a_image)}}" alt="" />
          </div>
        </div>
      </div>
    </section>

    <!-- hr -->
    <hr class="line-vr-section" />
    <!-- Team -->
    <section class="team section-padding">
      <div class="container">
        <div class="row mb-30">
          <div class="section-head col-md-12 text-center">
            <div class="section-subtitle">Our Team</div>
            <div class="section-title white">Tattoo <span>Artists</span></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 desc">
            <div class="owl-carousel owl-theme">

                <?php $teams = DB::table('teams')->orderBy("id","desc")->get(); ?>
                @foreach ($teams as $team)

              <div class="item right">
                <figure>
                  <img src="{{url('public/images/team/'.$team->image)}}" alt="image" class="img-fluid" />
                </figure>
                <div class="caption padding-left">
                  <div class="name">{{$team->name}}</div>
                  <div class="subname">{{$team->designation}}</div>
                  <p>
                    <?php echo $team->desc; ?>
                  </p>
                  <a href="{{url('t/'.$team->slug)}}" class="btn-curve btn-1 mt-10"
                    ><span>View Details</span></a
                  >
                </div>
              </div>

              @endforeach

            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
