<?php $pages = DB::table('pages')->where("id","5")->first(); ?>
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
    <div class="col-md-7 caption mt-90 text-center">
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
<!-- Faqs -->
<section class="section-padding">
    <div class="container">
      <div class="row">
        {{-- Left side box start --}}
        <div class="col-md-6">
          <ul class="accordion-box clearfix">
            <?php
            $faqs = DB::table('faqs')->orderBy("id", "desc")->get();
            $count = count($faqs);
            $halfCount = ceil($count / 2);
            $leftFaqs = $faqs->take($halfCount);
            $rightFaqs = $faqs->splice($halfCount);
            ?>
            @foreach ($leftFaqs as $rightFaq)
            <li class="accordion block">
              <div class="acc-btn">{{$rightFaq->question}}</div>
              <div class="acc-content">
                <div class="content">
                  <div class="text">
                    <?php echo $rightFaq->answer; ?>
                  </div>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
        {{-- Left side box end --}}

        {{-- Right side box start --}}
        <div class="col-md-6">
          <ul class="accordion-box clearfix">
            @foreach ($rightFaqs as $rightFaq)
            <li class="accordion block">
              <div class="acc-btn">{{$rightFaq->question}}</div>
              <div class="acc-content">
                <div class="content">
                  <div class="text">
                    <?php echo $rightFaq->answer; ?>
                  </div>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
        {{-- Right side box end --}}
      </div>
    </div>
  </section>
@endsection
