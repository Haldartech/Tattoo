<?php
$settings = DB::table('settings')->where("id","1")->first();
?>
@section('title', 'Home')
@extends('front.resource.main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<style>
    .col-lg-3{
      height: 284px;
    }

    .portfolio-section {
      padding: 50px 0;
    }
    .portfolio-section h2 {
      font-size: 36px;
      font-weight: 600;
      color: #fff;
      text-transform: uppercase;
    }
    .portfolio-menu {
      text-align: center;
    }
    .control {
      color: #fff;
      padding: 5px 10px;
      border-radius: 3px;
      font-size: 25px;
      margin: 5px;
      cursor: pointer;
      -webkit-transition: all 05s ease;
      -moz-transition: all 05s ease;
      -ms-transition: all 05s ease;
      -o-transition: all 05s ease;
      transition: all 0.5s ease;
    }
    .portfolio-menu .control:hover {
      transition: all 0.5s ease;
      border-bottom: 2px solid #fff;
    }
    .fancybox-container button:focus {
      outline: 0;
      box-shadow: none;
    }
    .portfolio-item {
      padding-top: 30px;
    }
    .row .portfolio-item{
      display: flex !important;
    }
    .portfolio-item .sm-img-wrap{
      height: 100%;
      display: flex;
      justify-content: space-between;
      flex-direction: column;
    }
    .portfolio-item .sm-img-wrap .sm-img{
      height: calc(50% - 15px);
    }
    .pd {
      padding: 0;
      padding: 10px;
    }
    .pd img {
      transition: all 0.5s;
    }
    .portfolio-overlay {
      position: absolute;
      z-index: 2;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.7);
      width: 100%;
      height: 100%;
      text-align: center;
      visibility: hidden;
      transition: all 0.5s;
      transform: scale(0);
    }
    .portfolio-overlay::before {
      content: "";
      width: 0;
      height: 0;
      border-width: 0;
      position: absolute;
      left: 10%;
      top: 10%;
      transition: 50ms height ease 150ms;
      z-index: 3;
    }
    .portfolio-overlay::after {
      content: "";
      width: 0;
      height: 0;
      border-width: 0;
      position: absolute;
      right: 10%;
      bottom: 10%;
      transition: 100ms width ease 200ms;
      z-index: 3;
    }
    .portfolio-item:hover .portfolio-overlay::before {
      width: 80%;
      height: 80%;
      border-top: 1px solid #ffffff;
      border-right: 1px solid #ffffff;
      transition: width 0.1s ease 0.3s, height 0.1s ease 0.5s;
    }
    .portfolio-item:hover .portfolio-overlay::after {
      width: 80%;
      height: 80%;
      border-bottom: 1px solid #ffffff;
      border-left: 1px solid #ffffff;
      transition: width 0.1s ease 0.6s, height 0.1s ease 0.7s;
    }
    .portfolio-item li:hover .portfolio-overlay {
      visibility: visible;
      transform: scale(1);
    }
    .portfolio-overlay .category {
      position: absolute;
      top: 50%;
      left: 50%;
      font-size: 24px;
      line-height: 25px;
      font-weight: 700;
      color: #ffffff;
      transform: translate(-50%, -50%);
      transition: all .3s;
      z-index: 2;
      }
    .portfolio-overlay .magnify-icon {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 4;
      height: 40px;
      width: 40px;
      border-radius: 20px;
      background: #161616;
      margin: 0 5px;
      cursor: pointer;
      display: inline-block;
      transition: all 0.25s;
    }
    .portfolio-overlay .magnify-icon:hover {
      background: #000;
    }
    .portfolio-overlay .magnify-icon p span i {
      font-size: 23px;
      color: #fff;
      line-height: 40px;
      font-family: 'Oswald', sans-serif;
      cursor: pointer;
    }
    .desc ul li::before{
    content: "\2714";
    color:#904d30;
    padding-right: 20px;
    }

    .descone ul li::before{
    content: "\2212";
    color:#904d30 !important;
    padding-right: 20px;
    }

    /*******Responsive media query******/

    /* Extra small devices (portrait phones, less than 576px)*/
      </style>
<!-- Kenburns Slider -->
<?php
$banners = DB::table('banners')->get();
?>

<aside class="kenburns-section" id="kenburnsSliderContainer" data-overlay-dark="3">
<div class="kenburns-inner h-100">
  <div class="v-middle caption text-center">
    <div class="container">
      <div class="row h-100 justify-content-center">
        <div class="col-md-8 text-center">
          <h6 style="color: #ffffff">Welcome to {{$settings->title}} {{$settings->subtitle}}</h6>
          <?php $bantitle = DB::table('banner_titles')->first(); ?>
          <h1>{{$bantitle->b_title}} <span>{{$bantitle->b_subtitle}}</span></h1>
          <a href="#appointment" class="btn-curve btn-1 mt-30"><span> Book Your Tattoo </span> </a>
        </div>
      </div>
    </div>
  </div>
</div>
</aside>

<!-- hr -->
<hr class="line-vr-section" />
<!-- About -->
<section class="about section-padding">
    <div class="container">
      <?php $about = DB::table('abouts')->first(); ?>
      <div class="row">
        <div class="col-md-7 animate-box desc" data-animate-effect="fadeInLeft">
          <div class="section-subtitle text-white">{{$about->subtitle}}</div>
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
<!-- Process -->
{{-- <section class="section-padding">
<div class="container">
  <div class="row">
    <div class="col-md-5 section-head animate-box descone" data-animate-effect="fadeInLeft">
      <div class="section-subtitle text-white">Our Process</div>
      <div class="section-title white">How It <span>Works</span></div>
      <?php //$process = DB::table("pages")->where("id","11")->first(); ?>
      <p> <?php //echo $process->desc; ?> </p>
    </div>

    <div class="col-md-6 offset-md-1 mt-30 animate-box desc" data-animate-effect="fadeInRight">
      <div class="accrodion-grp" data-grp-name="process-faq-one-accrodion">

        <?php //$processes = DB::table('processes')->get();
        //$p = 1;
        ?>
        @foreach ($processes as $process)

        <div class="accrodion {{($process==$process->title)?'active':''}}">
          <div class="accrodion-title">
            <h4><span>{{$p}}.</span> {{$process->title}}</h4>
          </div>
          <div class="accrodion-content">
            <div class="inner">
              <p> <?php //echo $process->desc; ?> </p>
            </div>
          </div>
        </div>
        <?php //$p++; ?>
        @endforeach

      </div>
    </div>

  </div>
</div>
</section> --}}
<!-- Appointment Form -->
<section class="appointment" id="appointment">
<div class="background bg-img bg-fixed section-padding" style="background-image:url('{{('assets/front/img/slider/2.jpg')}}');" data-overlay-dark="3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5 section-head">
        <div class="section-subtitle text-white">Book Your Tattoo</div>
        <?php $appointment = DB::table('pages')->where("id",9)->first(); ?>
        <div class="section-title white">{{$appointment->title}}</div>
        <p> <?php echo $appointment->desc ?> </p>
        <div class="reservations mb-30">
          <div class="icon"><img src="{{url('assets/front/img/call.png')}}" alt="" /></div>
          <div class="text">
            <p class="text-white">Appointment</p>
            <?php $appointment = DB::table('settings')->where("id",1)->first(); ?>
            <a href="tel:{{$appointment->phone}}">{{$appointment->phone}}</a>
          </div>
        </div>
      </div>
      <!-- Appointment form -->
      <div class="col-md-6 offset-md-1">
        <div class="booking-box">
          <div class="booking-inner clearfix">
            <form method="POST" action="{{url('/admin/addAppointment')}}" class="form1 clearfix" >
                {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="input1_wrapper">
                    <label>Name</label>
                    <div class="input2_inner">
                      <input type="text" name="name" class="form-control input" placeholder="Name" required/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input1_wrapper">
                    <label>Phone</label>
                    <div class="input2_inner">
                      <input type="text" name="phone" maxlength="10" class="form-control input" placeholder="Phone" required/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input1_wrapper">
                    <label>Email</label>
                    <div class="input2_inner">
                      <input  type="email" name="email" class="form-control input" placeholder="Email" required/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input1_wrapper">
                    <label>Date</label>
                    <div class="input1_inner">
                      <input type="text" name="date" class="form-control input datepicker" placeholder="Date" required/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="select1_wrapper">
                    <label>Select Service</label>
                    <div class="select1_inner">
                        <?php $aservices = DB::table("appointment_serv_art")->orderBy("id","desc")->get();  ?>
                        <select name="service" class="select2 select" style="width: 100%">
                        <option>Select Service</option>
                        @foreach ($aservices as $aservice)
                        <option value="{{$aservice->id}}">{{$aservice->service}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="select1_wrapper">
                    <label>Select Artist</label>
                    <div class="select1_inner">
                        <?php $aartist = DB::table("appointment_serv_art")->orderBy("id","desc")->get();  ?>
                        <select name="artist" class="select2 select" style="width: 100%">
                        <option>Select Artist</option>
                        @foreach ($aartist as $aartis)
                        @if ($aartis->artist)
                        <option value="{{$aartis->id}}">{{$aartis->artist}}</option>
                        @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="input1_wrapper">
                    <label>Your comment</label>
                    <div class="input2_inner">
                     <input name="comment" type="text" class="form-control input" placeholder="Your comment"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn-form1-submit mt-15">
                    Make An Appointment Now
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Team -->
<section class="team section-padding">
    <div class="container">
      <div class="row mb-30">
        <div class="section-head col-md-12 text-center">
          <div class="section-subtitle text-white">Our Team</div>
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
<!-- hr -->
<hr class="line-vr-section" />
<!-- Services -->
<section class="services section-padding">
    <div class="container">
        <div class="row mb-30">
            <div class="section-head col-md-12">
              <div class="section-subtitle text-white">What We Do</div>
              <div class="section-title white">Our Services</div>
            </div>
          </div>
    <?php $services = DB::table('services')->orderBy("id","desc")->take(4)->get();
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
{{--<!-- Price -->--}}
{{--<section class="price-banner menu-book bg-blck">
<div class="container-fluid">
  <div class="row">
    <?php //$price_banner = DB::table('pages')->where("id",3)->first(); ?>
    <div class="col-md-5 p-0">
      <div class="img left"><img src="{{url('public/images/price_image/'.$price_banner->pp_image)}}" alt="" /></div>
    </div>
    <div class="col-md-7 p-0 valign">
      <div class="content">

        <div class="section-head mb-30">
          <div class="section-subtitle">Pricing Plan</div>
          <div class="section-title white">Price List</div>
        </div>
        <?php //$pricings = DB::table('pricings')->get(); ?>
        @foreach ($pricings as $pricing)

        <div class="menu-list">
          <div class="item">
            <div class="flex">
              <div class="title">{{$pricing->title}}</div>
              <div class="price"><?php //echo $pricing->currency ?> {{$pricing->amount}}</div>
            </div>
            <div class="dots"></div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </div>
</div>
</section> --}}

<section class="portfolio-section" id="portfolio">
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2>GALLERY</h2>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="isotope-filters isotope-filters-horizontal">
      <button class="isotope-filters-toggle button button-sm button-primary" data-custom-toggle="#isotope-filters" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button>
      <ul class="isotope-filters-list" id="isotope-filters">
        <li><a class="active control outline" data-filter="all" onclick="toggleActive(this)">All</a></li>
        <?php $cate = DB::table('categories')->orderBy("title","desc")->take(4)->get(); ?>
        @foreach ($cate as $cat)
        <li><a class="control outline" data-filter=".<?php echo $cat->title ?>" onclick="toggleActive(this)"><?php echo $cat->title ?></a></li>
        @endforeach
      </ul>
    </div>
  </div>


  <ul class="row portfolio-item" style="display: flex">
    <?php
    $gallery = DB::table('categories')
        ->leftJoin("gallery_mul_imgs", "gallery_mul_imgs.gal_id", "=", "categories.id")
        ->orderBy("gallery_mul_imgs.gal_id", "desc")
        ->take(5)
        ->get();
?>
<div class="row">
    <div class="col-md-6" style="height: 350px;">
        <li class="mix pd sm-img-wrap {{ $gallery[0]->title }}">
            <div class="sm-img">
                <img src="{{ url('public/images/gallery/'.$gallery[0]->gal_mul_img) }}" itemprop="thumbnail" alt="Image description" class="img-fluid" style="height: 330px;" />
            </div>
            <div class="portfolio-overlay">
                <div class="overlay-content">
                    <a data-fancybox="gallery" data-fancybox="item" title="click to zoom-in" href="{{ url('public/images/gallery/'.$gallery[0]->gal_mul_img) }}">
                        <div class="magnify-icon">
                            <p><span><i class="fa-solid fa-plus"></i></span></p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
    </div>
    <div class="col-md-6" style="height: 350px;">
        <li class="mix pd sm-img-wrap {{ $gallery[1]->title }}">
            <div class="sm-img">
                <img src="{{ url('public/images/gallery/'.$gallery[1]->gal_mul_img) }}" itemprop="thumbnail" alt="Image description" class="img-fluid" style="height: 330px;" />
            </div>
            <div class="portfolio-overlay">
                <div class="overlay-content">
                    <a data-fancybox="gallery" data-fancybox="item" title="click to zoom-in" href="{{ url('public/images/gallery/'.$gallery[1]->gal_mul_img) }}">
                        <div class="magnify-icon">
                            <p><span><i class="fa-solid fa-plus"></i></span></p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
    </div>
</div>
<div class="row">
    @foreach ($gallery as $key => $gal)
        @if($key > 1)
            <div class="col-md-4" style="height: 250px;">
                <li class="mix pd sm-img-wrap {{ $gal->title }}">
                    <div class="sm-img">
                        <img src="{{ url('public/images/gallery/'.$gal->gal_mul_img) }}" itemprop="thumbnail" alt="Image description" class="img-fluid" style="height: 230px;" />
                    </div>
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <a data-fancybox="gallery" data-fancybox="item" title="click to zoom-in" href="{{ url('public/images/gallery/'.$gal->gal_mul_img) }}">
                                <div class="magnify-icon">
                                    <p><span><i class="fa-solid fa-plus"></i></span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
            </div>
        @endif
    @endforeach
</div>
</ul>
</div>
</section>

<!-- Blog -->
<section class="blog section-padding">
<div class="container">
  <div class="row">
    <div class="col-md-8 mb-30">
      <div class="section-head text-center">
        <div class="section-subtitle text-white">Blog Articles</div>
        <div class="section-title white">Latest News</div>
      </div>
    </div>
  </div>
  <div class="row col-lg-12">
    <div class="owl-carousel owl-theme">

        <?php
        $blog_dtls = DB::table('blogs')->orderBy("id","desc")->take(5)->get();
        ?>
        @foreach ($blog_dtls as $blog_dtl)

      <div class="item">
        <div class="post-img">
          <a href="{{url('b/'.$blog_dtl->slug)}}">
            <div class="img"><img src="{{url('public/images/blog/'.$blog_dtl->blog_image)}}" alt="" /></div>
          </a>
        </div>
        <div class="cont">
          <h4><a href="{{url('b/'.$blog_dtl->slug)}}">{{$blog_dtl->blog_title}}</a></h4>
          <div class="info">
            <a href="{{url('b/'.$blog_dtl->slug)}}"><span>Blog</span></a>
            <a href="{{url('b/'.$blog_dtl->slug)}}">{{date('d-m-Y', strtotime($blog_dtl->date))}}</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>

</div>
</section>

  <script>
    function toggleActive(element) {
  var filters = document.querySelectorAll('.isotope-filters-list li a');
  filters.forEach(function (filter) {
    filter.classList.remove('active');
  });
  element.classList.add('active');
}
</script>

<script>
var containerEl = document.querySelector(".portfolio-item");
var mixer = mixitup(containerEl, {
  animation: {
    effects: "fade translateZ(-100px)",
    effectsIn: "fade translateY(-100%)",
    easing: "cubic-bezier(0.645, 0.045, 0.355, 1)"
  }
});
$("[data-fancybox]").fancybox({
  loop: true,
  hash: true,
  transitionEffect: "slide",
  clickContent: function(current, event) {
    return current.type === "image" ? "next" : false;
  }
});
</script>

<script>
    $(document).ready(function () {
      var slides = [
        @foreach ($banners as $banner)
        {
          src: "{{ asset('public/images/banner/'.$banner->b_image) }}"
        },
        @endforeach
      ];

      $("#kenburnsSliderContainer").vegas({
        slides: slides,
        overlay: true,
        transition: "fade2",
        animation: "kenburnsUpRight",
        transitionDuration: 1000,
        delay: 10000,
        animationDuration: 20000
      });
    });
  </script>



@endsection
