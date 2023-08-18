<?php $pages = DB::table('pages')->where("id","3")->first(); ?>
@section('title', 'Gallery')
@extends('front.resource.main')
@section('content')

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
      /* background: #000; */
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
    /* .mixitup-control-active {
      color: #fff;
      border-bottom: 2px solid #ffffff;
    } */
    .fancybox-container button:focus {
      outline: 0;
      box-shadow: none;
    }
    .portfolio-item {
      padding-top: 30px;
    }
    .portfolio-item .sm-img-wrap{
      height: 100%;
      display: flex;
      /* padding: 0;
      margin: 0; */
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
      /* height: 180px; */
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
    /* .portfolio-overlay p,
    .portfolio-overlay a {
      position: relative;
      z-index: 4;
    } */
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
      /* margin-top: 70px;
      margin-bottom: 20px;
      font-size: 16px;
      color: #fff;
      font-weight: 500; */
      position: absolute;
      top: 50%;
      left: 50%;
      font-size: 24px;
      line-height: 25px;
      font-weight: 700;
      color: #ffffff;
      transform: translate(-50%, -50%);
      transition: all .3s;
      /* opacity: 0; */
      z-index: 2;
      }
    /* .portfolio-overlay .magnify-icon:first-child{
      top: 20%;
    } */
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
      /* line-height: 40px; */
      font-family: 'Oswald', sans-serif;
      cursor: pointer;
    }


    /*******Responsive media query******/

    /* Extra small devices (portrait phones, less than 576px)*/


      </style>


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
  <div class="col-lg-12">
    <div class="isotope-filters isotope-filters-horizontal">
      <button class="isotope-filters-toggle button button-sm button-primary" data-custom-toggle="#isotope-filters" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button>
      <ul class="isotope-filters-list" id="isotope-filters">
        <li><a class="active control outline" data-filter="all" onclick="toggleActive(this)">All</a></li>
        <li><a class="control outline" data-filter=".TRADITIONAL" onclick="toggleActive(this)">TRADITIONAL TATTOOS</a></li>
        <li><a class="control outline" data-filter=".ORNAMENT" onclick="toggleActive(this)">ORNAMENT TATTOOS</a></li>
        <li><a class="control outline" data-filter=".MINIMALISTIS" onclick="toggleActive(this)">MINIMALISTIS</a></li>
        <li><a class="control outline" data-filter=".BLACKWHITE" onclick="toggleActive(this)">BLACK AND WHITE</a></li>
        <li><a class="control outline" data-filter=".OTHER" onclick="toggleActive(this)">OTHER</a></li>
      </ul>
    </div>
  </div>
  <ul class="row portfolio-item">

    <?php
    $galleryQuery = DB::table('categories')
        ->leftjoin("galleries","galleries.cat_id","=","categories.id")
        ->leftJoin("gallery_mul_imgs", "gallery_mul_imgs.gal_id", "=", "categories.id")
        ->orderBy("categories.id", "desc");

    if (!empty($request->date)) {
        $galleryQuery->whereYear("categories.date", $request->date);
    }

    if (!empty($request->title)) {
        $galleryQuery->where("categories.title", $request->title);
    }

    if (!empty($request->tag)) {
        $galleryQuery->where("galleries.tag", $request->tag);
    }

    $gallery = $galleryQuery->get();
?>

@foreach ($gallery as $gal)
    <li class="mix col-xl-3 col-md-3 col-12 col-sm-6 pd sm-img-wrap {{ $gal->title }}">
        <div class="sm-img">
            <img src="{{ url('public/images/gallery/'.$gal->gal_mul_img) }}" itemprop="thumbnail" alt="Image description"  style="width:257px;height:257px"/>
        </div>
        <div class="portfolio-overlay">
            <div class="overlay-content">
                <a data-fancybox="gallery" data-fancybox="item" title="click to zoom-in" href="{{ url('public/images/gallery/'.$gal->gal_mul_img) }}">
                    <div class="magnify-icon" >
                        <p><i class="fa-solid fa-plus fa-2x" style="color: #fff; font-size: 23px; margin-top: 8px;"></i></p>
                    </div>
                </a>
            </div>
        </div>
    </li>
@endforeach


  </ul>
    </div>
  </section>

  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script> --}}

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
  $(document).ready(function() {
    // Initialize Isotope
    var $portfolioItems = $('.portfolio-item').isotope();

    // Filter items on button click
    $('.isotope-filters-list').on('click', 'a', function() {
      var filterValue = $(this).attr('data-filter');
      $portfolioItems.isotope({ filter: filterValue });

      // Toggle active class
      $('.isotope-filters-list a').removeClass('active');
      $(this).addClass('active');
    });
  });
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


@endsection
