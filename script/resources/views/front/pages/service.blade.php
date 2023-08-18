<?php $pages = DB::table('pages')->where("id","2")->first(); ?>
@section('title', $pages->title)
@extends('front.resource.main')
@section('content')

<section
      class="banner-header full-height section-padding valign bg-img bg-fixed"
      data-overlay-dark="4"
      data-background="{{url('public/images/pages_manager/'.$pages->p_image)}}"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-6 caption mt-90">
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
    <!-- Services -->
    <section class="services section-padding">
      <div class="container">

      <?php $services = DB::table('services')->orderBy("id","desc")->get();
        $i = 1;
      ?>
      @foreach ($services as $service)
        @if ($i%2 == 0)
          <div class="row mb-30">
            <div class="col-md-6 order2 valign animate-box" data-animate-effect="fadeInLeft">
              <div class="content">
                <div class="date">
                  <h1>0{{$i}}</h1>
                </div>
                <div class="cont">
                  <h5>{{$service->title}}</h5>
                  <p>
                    <?php echo $service->shrt_desc; ?>
                  </p>
                  <a href="{{url('s/'.$service->slug)}}" class="btn-curve btn-1 mt-10">
                    <span>Read More</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 order1 animate-box" data-animate-effect="fadeInRight">
              <div class="img left">
                <a href="{{url('s/'.$service->slug)}}">
                  <img src="{{url('public/images/service/'.$service->s_image)}}" alt="s_image" />
                </a>
              </div>
            </div>
          </div>
        @else
          <div class="row mb-30 image-container">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
              <div class="img left">
                <a href="{{url('s/'.$service->slug)}}">
                  <img src="{{url('public/images/service/'.$service->s_image)}}" alt="s_image" />
                </a>
              </div>
            </div>
            <div class="col-md-6 valign animate-box" data-animate-effect="fadeInRight">
              <div class="content">
                <div class="date">
                  <h1>0{{$i}}</h1>
                </div>
                <div class="cont">
                  <h5>{{$service->title}}</h5>
                  <p>
                    <?php echo $service->shrt_desc; ?>
                  </p>
                  <a href="{{url('s/'.$service->slug)}}" class="btn-curve btn-1 mt-10">
                    <span>Read More</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        @endif
        <?php $i++; ?>
      @endforeach

      </div>
    </section>

@endsection
